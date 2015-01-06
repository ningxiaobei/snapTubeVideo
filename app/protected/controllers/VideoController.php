<?php

class VideoController extends Controller
{
	public $layout='main';
	public $currentPage = '';
	public $categories = array();
	private $api = 'http://api.snappea.com/v1/video/'; 


	/*
	
	视频详情： http://api.snappea.com/v1/video/4701886

	分类列表： http://api.snappea.com/v1/video/categories?hl=id_GZ

	music 分类： http://api.snappea.com/v1/video?category=Music&region=IN&start=0&max=10

	popular： http://api.snappea.com/v1/video/starter?region=IN&start=0&max=5

	专题列表：http://api.snappea.com/v1/video/specials/rich?region=IN

	专题详情： http://api.snappea.com/v1/video/special/detail?id=13&region=IN&start=0&max=1

	MV专题列表：http://api.snappea.com/v1/video/MV/specials?region=IN

	MV专题详情: http://api.snappea.com/v1/video/MV/special/detail?id=1&region=IN&start=0&max=5

	TOP :  http://api.snappea.com/v1/video/toplist/topdownload?region=IN

	*/

	public function init()
	{
		$categoresString = file_get_contents($this->api . 'categories?hl=id_GZ');
		$this->categories = json_decode($categoresString,true);
	}


	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
		$this->currentPage = 'index';
		//专题数据
		$specialsString = file_get_contents($this->api . 'specials/rich?region=IN&start=0&max=5');
		$specialsArray = json_decode($specialsString, true);

		$topString = file_get_contents($this->api . 'toplist/topdownload?region=IN&start=0&max=10');
		$topArray = json_decode($topString , true); 


		// echo $specialsString;die;


		// renders the view file 'protected/views/index/index.php'
		// using the default layout 'protected/views/layouts/main.php'
		$this->render('index' , array( 'specials' => $specialsArray, 'top' => $topArray,  'currentPage' => 'index'));
	} 

	public function actionList()
	{  
		$this->currentPage = 'list';
 	
 		$listId = Yii::app()->request->getParam('id');

		$sitePath = array( );
		$sitePath['List'] = '/' . $this->getId() . '/' . $this->action->id;

		$template = 'list';

		$specialsArray = array();

		if($listId)
		{
			//专题详细数据 
			$specialsString = file_get_contents($this->api . 'special/detail?id='.$listId.'&region=IN&start=0&max=40');
			$specialsArray = json_decode($specialsString, true); 
			foreach ($specialsArray['items'] as $key => $value) { 
				$date[$key] = $value['latestEpisodeDate'];
			} 
			array_multisort($date,SORT_DESC,$specialsArray['items']);
			$sitePath[$specialsArray['special']['name']] = '/' . $this->getId() . '/' . $this->action->id . '/id/' . $specialsArray['special']['id'];

			$template = 'listdetail'; 

		}else{ 
			//专题数据
			$specialsString = file_get_contents($this->api . 'specials/rich?region=IN&videoCount=5&start=0&max=8');
			$specialsArray = json_decode($specialsString, true);
			foreach($specialsArray as $index => $special)
			{
				$date = array();
				foreach ($specialsArray[$index]['items'] as $key => $value) { 
			 		$date[$key] = $value['latestEpisodeDate'];
				}
				array_multisort($date,SORT_DESC,$specialsArray[$index]['items']);
			} 
		} 

		self::detail($sitePath);  // 如果有vid就跳转到视屏详情页

		$this->render($template , array('sitePath' => $sitePath ,  'list' => $specialsArray));

	} 


	public function actionCategory()
	{
		$this->currentPage = 'category';
		$page = Yii::app()->request->getParam('page') ? Yii::app()->request->getParam('page') : 1;
		$offset = $page * 40 + 1;
		$alias = Yii::app()->request->getParam('alias'); 

		$videosString = file_get_contents($this->api . "?category=$alias&region=IN&start=0&max=40");
		//echo $videosString;die;
		$videosArray = json_decode($videosString, true);
		// echo $videosString;die;

		$sitePath = array( );
		$sitePath['Categories'] =  '/' . $this->getId() . '/' . $this->action->id; 
		if($alias)
		{
			$sitePath[$alias] = '/' . $this->getId() . '/' . $this->action->id . '/alias/' . $alias;
			
			self::detail($sitePath);

			$this->render('category' , array('sitePath' => $sitePath ,  'list' => $videosArray , 'alias' => $alias , 'page' => $page ));
		}else{
			$videosArray = array();
			foreach($this->categories as $cate)
			{
				$videosString = file_get_contents($this->api . "?category=" . $cate['alias'] . "&region=IN&start=0&max=5");
				$videosArray[$cate['alias']] = json_decode($videosString, true);
			}
			
			self::detail($sitePath);
			
			$this->render('category' , array('sitePath' => $sitePath ,  'list' => $videosArray  ));
		}

	}


	public function actionTop()
	{
		$this->currentPage = 'top';
		$topString = file_get_contents($this->api . 'toplist/topdownload?region=IN&start=0&max=101');
		$topArray = json_decode($topString , true); 
		$sitePath = array( 
				'Top' => '/' . $this->getId() . '/' . $this->action->id
			);

		foreach ($topArray['items'] as $key => $value) { 
			$count[$key] = $value['weeklyDownloadCount'];
		} 
		array_multisort($count,SORT_DESC,$topArray['items']);

		self::detail($sitePath);

		$this->render('top' , array( 'top' => $topArray , 'sitePath' => $sitePath));
	}

	public function actionPopular()
	{
		$this->currentPage = '';
		$popularString = file_get_contents($this->api . 'starter?region=IN&start=0&max=40');
		$popularArray = json_decode($popularString , true); 
		$sitePath = array( 
				'Popular' => '/' . $this->getId() . '/' . $this->action->id
			);

		self::detail($sitePath);

		// foreach ($topArray['items'] as $key => $value) { 
		// 	$count[$key] = $value['weeklyDownloadCount'];
		// } 
		// array_multisort($count,SORT_DESC,$topArray['items']);

		$this->render('popular' , array( 'popular' => $popularArray , 'sitePath' => $sitePath));
	}


	private function detail($sitePath)
	{ 

		$videoId = Yii::app()->request->getParam('vid'); 
		if($videoId)
		{

			$detailString = file_get_contents($this->api . $videoId);
			$detailArray = json_decode($detailString, true);
			$popularString = file_get_contents($this->api . 'starter?region=IN&start=0&max=10');
			$popularArray = json_decode($popularString , true);


			$sitePath[$detailArray['title']] = Yii::app()->request->getHostInfo().Yii::app()->request->url;

			$this->render('detail',array('sitePath' => $sitePath,   'data' => $detailArray , 'popular' => $popularArray)); 
			die;
		}
	}  

	//格式化时间
	public function formatDate($date)
	{
		$unit = "day";
		if($date)
		{
			$currentDate = time() . '000';
			$num = ( $currentDate - $date ) / 1000 / 60 / 60 / 24; 
			//echo $currentDate .'-'. $date;die;
			if($num < 1){
				return 'Today';
			}
			if($num > 30)
			{
				$unit = "month";
				$num = $num / 30; 
				if($num > 12)
				{
					$unit = "year";
					$num = $num / 12;
				}
			}
		}

		return floor($num) . ' ' . $unit . ' ago';
	}
}