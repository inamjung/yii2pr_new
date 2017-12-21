<?php

namespace frontend\modules\health\controllers;

use Yii;
use yii\web\Controller;
use yii\data\ArrayDataProvider;

class HealthhosController extends Controller
{
    public function actionHosvisit($hn=null){
        
        $sql="select v.vstdate,p.cid,v.vn ,p.hn,CONCAT(p.pname,p.fname,'  ',p.lname) as pt
,p.sex,v.age_y,p.pttype,p.clinic,p.drugallergy
,v.pdx,ROUND(o.height,0) height,ROUND(o.bw,0) bw,ROUND(o.waist,0) waist,o.cc,CONCAT(ROUND(o.bps,0),ROUND(o.bpd,0)) as bp,ROUND(o.bpd,0) as bpd,ROUND(o.bps,0) as bps,o.drinking_type_id,o.smoking_type_id
,o.hr,o.pe,o.pulse,o.temperature,o.rr,ROUND(o.fbs,0) fbs,o.hpi
,o.bmi,ROUND(o.tg,0) tg,ROUND(o.hdl,0) hdl,o.glucurine,ROUND(o.bun,0) bun,o.creatinine,o.ua,o.hba1c,ROUND(o.tc,0) tc,ROUND(o.ldl,0) ldl,ROUND(o.ast,0) ast,ROUND(o.alt,0) alt,ROUND(o.cholesterol,0) cholesterol
,pg.gfr_ckd,ptt.name as pttname
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='4' and lh.vn=v.vn limit 1) as hct_cbc
,REPLACE((select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='5' and lh.vn=v.vn limit 1),',','') as wbc_count_cbc
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='21' and lh.vn=v.vn limit 1) as eo_cbc
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='279' and lh.vn=v.vn limit 1) as urine_proteine_ua


,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='275' and lh.vn=v.vn limit 1) as urine_gluose_ua
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='289' and lh.vn=v.vn limit 1) as rbc_ua
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='293' and lh.vn=v.vn limit 1) as wbc_ua
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='213' and lh.vn=v.vn limit 1) as parasite
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='212' and lh.vn=v.vn limit 1) as occountblood
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='79' and lh.vn=v.vn limit 1) as uric
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='110' and lh.vn=v.vn limit 1) as tsh


,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='110' and lh.vn=v.vn limit 1) as lab01
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='110' and lh.vn=v.vn limit 1) as lab02
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='110' and lh.vn=v.vn limit 1) as lab03
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='110' and lh.vn=v.vn limit 1) as lab04
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='110' and lh.vn=v.vn limit 1) as lab05
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='110' and lh.vn=v.vn limit 1) as lab06
,(select lo.lab_order_result
from lab_head lh
left outer join lab_order lo on lo.lab_order_number=lh.lab_order_number
where lo.lab_items_code ='110' and lh.vn=v.vn limit 1) as lab07




,v.dx_doctor
,(select name from doctor where code=v.dx_doctor)as dname
from vn_stat v
inner join opdscreen o on o.vn=v.vn
inner join patient p on p.hn=v.hn
inner join patient_hospital_officer ph on ph.hn=v.hn
left outer join pcrh_gfr pg on pg.hn=v.hn
left outer join pttype ptt on ptt.pttype=p.pttype
where  p.hn='$hn'
and ph.is_officer='Y'
and v.dx_doctor  is not null
group by v.vn order by v.vn desc limit 30";
        
         try{
            $rawData = Yii::$app->db2->createCommand($sql)->queryAll();
        }  catch (\yii\db\Exception $e){
            throw new \yii\web\ConflictHttpException('sql error');
        }
        
        if( !empty($rawData[0])){
            $cols = array_keys($rawData[0]);
            
        }
       
        
        $dataProvider = new ArrayDataProvider([
                'allModels'=>$rawData, 
                'sort'=> !empty($cols) ? ['attributes'=> $cols] : FALSE,
                'pagination'=>FALSE
            ]);
        
        return $this->render('hosvisit',[
            'dataProvider' => $dataProvider,
            'sql' => $sql,
//            'date1'=>$date1,
//            'date2'=>$date2,
            'hn'=>$hn
            
        ]);
    }
    public function actionInsertsys($Vstdate=null,$Cid=null,$Vn=null,$Hn=null,$Pt=null,$Sex=null,$Age_y=null,$Pttype=null
            ,$Clinic=null,$Drugallergy=null,$Pdx=null,$Height=null,$Bw=null,$Waist=null,$Cc=null,$Bp=null,$Bpd=null,$Bps=null
            ,$Drinking_type_id=null,$Smoking_type_id=null,$Hr=null,$Pe=null,$Pluse=null,$Temperature=null,$Rr=null
            ,$Fbs=null,$Bmi=null,$Tg=null,$Hdl=null,$Glucurine=null,$Bun=null,$Creatinine=null
            ,$Ua=null,$Hba1c=null,$Tc=null,$Ldl=null,$Ast=null,$Alt=null,$Cholesterol=null
            ,$Gfr_ckd=null,$Hct_cbc=null,$Wbc_count_cbc=null,$Eo_cbc=null,$Urine_proteine_ua=null,$Urine_gluose_ua=null
            ,$Rbc_ua=null,$Wbc_ua=null,$Parasite=null,$Occountblood=null,$Dx_doctor=null
            ,$Uric=null,$Tsh=null
           
            ,$Lab01=null,$Lab02=null,$Lab03=null,$Lab04=null,$Lab05=null,$Lab06=null,$Lab07=null             
             
            ,$Dname=null,$ic_confirm=null,$ic_insys=null)
        {
        
        $sys = new \frontend\modules\health\models\Insys();
        
        $sys->Vstdate = $Vstdate;
        $sys->Cid = $Cid;
        $sys->Vn = $Vn;
        $sys->Hn = $Hn;
        $sys->Pt = $Pt;
        $sys->Sex = $Sex;
        $sys->Age_y = $Age_y;
        $sys->Pttype = $Pttype;
        $sys->Clinic = $Clinic;
        $sys->Drugallergy = $Drugallergy;
        $sys->Pdx = $Pdx;
        $sys->Height = $Height;
        $sys->Bw = $Bw;
        $sys->Waist = $Waist;
        $sys->Cc = $Cc;
        $sys->Bp = $Bp;
        $sys->Bpd = $Bpd;
        $sys->Bps = $Bps; 
        $sys->Drinking_type_id =$Drinking_type_id;
        $sys->Smoking_type_id = $Smoking_type_id;
        $sys->Hr = $Hr;
        $sys->Pe = $Pe;
        $sys->Pulse = $Pluse;
        $sys->Temperature = $Temperature;        
        $sys->Rr = $Rr;
        $sys->Fbs = $Fbs;
        $sys->Bmi = $Bmi;
        $sys->Tg = $Tg;
        $sys->Hdl = $Hdl;
        $sys->Glucurine = $Glucurine;
        $sys->Bun = $Bun;
        $sys->Creatinine = $Creatinine;
        $sys->Ua = $Ua;
        $sys->Hba1c = $Hba1c;
        $sys->Tc = $Tc;
        $sys->Ldl = $Ldl;
        $sys->Ast = $Ast;
        $sys->Alt = $Alt;
        $sys->Cholesterol = $Cholesterol;        
        $sys->Gfr_ckd = $Gfr_ckd;        
        $sys->Hct_cbc = $Hct_cbc;
        $sys->Wbc_count_cbc = $Wbc_count_cbc;
        $sys->Eo_cbc = $Eo_cbc;
        $sys->Urine_proteine_ua = $Urine_proteine_ua;
        $sys->Urine_gluose_ua = $Urine_gluose_ua;
        $sys->Rbc_ua = $Rbc_ua;
        $sys->Wbc_ua = $Wbc_ua;
        $sys->Parasite = $Parasite;
        $sys->Occountblood = $Occountblood; 
        $sys->Uric = $Uric;
        $sys->Tsh = $Tsh;
        
        
        $sys->Lab01 = $Lab01;
        $sys->Lab02 = $Lab02;
        $sys->Lab03 = $Lab03;
        $sys->Lab04 = $Lab04;
        $sys->Lab05 = $Lab05;
        $sys->Lab06 = $Lab06;
        $sys->Lab07 = $Lab07;
        
        $sys->Dx_doctor = $Dx_doctor;
        $sys->Dname = $Dname;        
        $sys->ic_confirm = 0;
        $sys->ic_insys = 1;        
        $sys->save();
        
    }
    
}
