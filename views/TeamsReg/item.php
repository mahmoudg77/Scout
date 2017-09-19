<?if(!$request->isAjax())include(PATH.'templates/cpheader.php');?>
<div id="teamprint" dir="rtl">
    <div class="row">
        <div class="col col-md-4">
        <h2>جمهورية مصر العربية</h2>
        <h2>جمعية الكشافة البحريةالمصرية</h2>
        </div>
        <div class="col col-md-4"></div>
        <div class="col col-md-4">
            <img class="img-responseive" src="http://cairoseascout.com/en/templates/assets/img/logo_scouts.png"/>
        </div>
        <hr/>
        <div class="col col-md-12 text-center"><h3>استمارة تسجيل فريق</h3></div>
    </div>

    <table>
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
    <table>
        <thead>
            <tr><th>م</th><th>الإسم</th><th>تاريخ الميلاد</th><th>العنوان</th><th>ملاحظات</th></tr>
        </thead>
        <?$n=1;
foreach($members as $profile){?>
        <tr>
        <td><?=$n?></td>
        <td><?=$profile->name?></td>
        <td><?=$profile->Birth_Date?></td>
        <td><?=$profile->address?></td>
        <td></td>
        </tr>
        <?}?>
    </table>
</div>
<?if(!$request->isAjax())include(PATH.'templates/cpfooter.php');?>
