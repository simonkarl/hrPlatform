<?php

class ResumeAction extends Action {


	public function resumeDetail(){

		if(!empty($_REQUEST['id'])){

			$resumeApi = new resumeApi();

			$result = $resumeApi->getResumeDetailByResume_id($_REQUEST['id']);
         // unset($result['info']);
         //print_r($result);
 

         $basicInfoArray = $result['info']['0'];
         $educationsArray = $result['educations']['0'];
         $skillsArray = $result['skills'];
         $work_experiencesArray = $result['work_experiences'];
         
         $resume_id = $basicInfoArray['resume_id'];
         $user_name = $basicInfoArray['user_name'];
         $keyword = $basicInfoArray['keyword'];
         $gongzuojingyan = $basicInfoArray['gongzuojingyan'];
         $xingbei = $basicInfoArray['xingbei'];
         $birth = $basicInfoArray['birth'];
         $hunyinzhuangkuang = $basicInfoArray['hunyinzhuangkuang'];
         $zhengzhimianmo = $basicInfoArray['zhengzhimianmo'];
         $juzhudi = $basicInfoArray['juzhudi'];
         $hukou = $basicInfoArray['hukou'];
         $phone = $basicInfoArray['phone'];
         $email = $basicInfoArray['email'];
         $company = $basicInfoArray['company'];
         $hangye = $basicInfoArray['hangye'];
         $zhiwei = $basicInfoArray['zhiwei'];
         $xueli = $basicInfoArray['xueli'];
         $zhuanye = $basicInfoArray['zhuanye'];
         $school = $basicInfoArray['school'];
         $annual = $basicInfoArray['annual'];
         $ziwopingjia = $basicInfoArray['ziwopingjia'];
         $daogangshijian = $basicInfoArray['daogangshijian'];
         $qiwangyuexin = $basicInfoArray['qiwangyuexin'];
         $xiwanghangye = $basicInfoArray['xiwanghangye'];
         $mubiaodidian = $basicInfoArray['mubiaodidian'];

         $studyTime = $educationsArray ['studyTime'];

         $this->assign('resume_id',$resume_id);
         $this->assign('user_name',$user_name);
         $this->assign('keyword',$keyword);
         $this->assign('gongzuojingyan',$gongzuojingyan);
         $this->assign('xingbei',$xingbei);
         $this->assign('birth',$birth);
         $this->assign('hunyinzhuangkuang',$hunyinzhuangkuang);
         $this->assign('zhengzhimianmo',$zhengzhimianmo);
         $this->assign('juzhudi',$juzhudi);
         $this->assign('hukou',$hukou);
         $this->assign('phone',$phone);
         $this->assign('email',$email);
         $this->assign('company',$company);
         $this->assign('hangye',$hangye);
         $this->assign('zhiwei',$zhiwei);
         $this->assign('xueli',$xueli);
         $this->assign('zhuanye',$zhuanye);
         $this->assign('school',$school);
         $this->assign('annual',$annual);
         $this->assign('ziwopingjia',$ziwopingjia);
         $this->assign('daogangshijian',$daogangshijian);
         $this->assign('qiwangyuexin',$qiwangyuexin);
         $this->assign('xiwanghangye',$xiwanghangye);
         $this->assign('mubiaodidian',$mubiaodidian);
         $this->assign('studyTime',$studyTime);

         

         $this->assign('skillsArray',$skillsArray);
         $this->assign('work_experiencesArray',$work_experiencesArray);

         $this->display('resumeDetail');

		}
	}

	public function searchResume(){

		 $resumeApi = new resumeApi();

         if(!empty($_REQUEST['page'])){

            $page = $_REQUEST['page'];

         } else{

            $page = 1;

         }

         $result = $resumeApi->searchResumeByKeyWord($_REQUEST['keyword'],$page);
     
         $page = new page('resume/searchResume',$_REQUEST['keyword'],$_REQUEST['type']);

         $fenye = $page->coutPage($result['current_page'],$result['fina_page']);

         $this->assign('result',$result['data']);

         $this->assign('fenye',$fenye);

         $this->display('searchResume');
	}

}