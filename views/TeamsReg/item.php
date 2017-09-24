<?if(!$request->isAjax())include(PATH.'templates/cpheader.php');?>

<?$team=$data;?>
<div id="teamprint" dir="rtl">
    <div class="row">
    <div class="col col-md-4 text-left" style="height:150px">
            <img class="" style="height:100%" src="http://cairoseascout.com/en/templates/assets/img/logo_scouts.png"/>
        </div>
        <div class="col col-md-4 ">
        </div>
        <div class="col col-md-4 ">
        <h3><strong>جمهورية مصر العربية</strong></h3>
        <h3><strong>جمعية الكشافة البحريةالمصرية</strong></h3>
        </div>
         
        <hr/>
        <div class="col col-md-12 text-center"><h4><strong>استمارة تسجيل فريق</strong></h4></div>
    </div>

    <table  class="table">
        <tr>
             <td>إسم الفريق</td>            <td><?=$team->TeamId->name?></td>
             <td>الفرع</td>     <td><?=$team->TeamId->parentId->parentId->parentId->name?></td>
        </tr>
        <tr>
             <td>عنوان مقر الفريق</td>            <td></td>
             <td>جملة الرسوم</td>     <td><?=$team->NoOfTeam*10?></td>
        </tr>
         <tr>
             <td>إسم الهيئة المشرفة</td>            <td><?=$team->TeamId->parentId->parentId->name?></td>
             <td>رقم الإيصال</td>     <td></td>
        </tr>
         <tr>
             <td>إسم القائد</td>            <td><?=$team->LeaderId->name?></td>
             <td>تاريخ السداد</td>     <td><?=$team->approved_date?></td>
        </tr>
         <tr>
             <td>اسم المساعدين</td>        <td>
                                             <?=$team->AFLeaderId->name?>  <br/>  <?=$team->ASLeaderId->name?>
                                            </td>
             <td>رقم التسجيل</td>     <td></td>
        </tr>
    </table>
    <table class="table table-bordered table-striped text-center">
        <thead>
            <tr><th>م</th><th>الإسم</th><th>تاريخ الميلاد</th><th>العنوان</th><th>ملاحظات</th></tr>
        </thead>
        <?$n=1;
foreach($team->members as $profile){?>
        <tr>
        <td><?=$n?></td>
        <td><?=$profile->name?></td>
        <td><?=$profile->Birth_Date?></td>
        <td><?=$profile->addresss?></td>
        <td></td>
        </tr>
        <?$n++;}?>
    </table>
    <table class="table">
    <tr><td>التاريخ :<?=date("Y-m-d")?></td><td>توقيع القائد</td><td>رئيس الهيئة المشرفة</td><td rowspan="2"> خاتم الهيئة </td></tr>
    <tr><td></td><td>----------------</td><td>--------------------------</td></tr>
    <tr><td>اعتماد الفرع :</td><td>:رقم وتاريخ موافقة مجلس ادارة الفرع</td><td colspan="2">--------------------------------------</td></tr>
    <tr><td>مفوض المرحلة</td><td>المفوض العام</td><td>رئيس الفرع</td><td rowspan="2"> خاتم الفرع </td></tr>
    <tr><td>-----------------</td><td>----------------</td><td>--------------------------</td></tr>
    </table>
    <hr/>
     <table class="table">
    <tr><td>يعتمد تسجيل الفرقة</td><td>المدير التنفيذي</td><td>كبير المفوضي</td><td rowspan="2"></td></tr>
    <tr><td></td><td>----------------</td><td>--------------------------</td></tr>
    </table>
    
</div>
<?if(!$request->isAjax())include(PATH.'templates/cpfooter.php');?>
