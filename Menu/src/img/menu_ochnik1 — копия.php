<!--<table width="100%" cellspadding=0 cellspacing=0>
<tr><td width="100%" height=20 align="left" style="background: #EEE; border-bottom: #DDD 1px solid; border-top: #DDD 1px solid">
        <ul id="navmenu-h">
          <li><a href="http://de.ncgti.ru" target="_blank">������� ��������</a></li> 
			<li><a href="messages.php">�������</a></li>
			<li><a href="get_student_lit_plan.php">����������</a></li>
			<li><a href="zachetka_sql.php">�����. ������</a></li>
			<li><a href="get_student_ball.php">�������</a></li>
			<li><a href="rasp_ochn.php">����������</a></li>
		<li><a href="#">��������</a>
				<ul>
					<li><a href="discs.php">����������� �����</a></li>
					<li><a href="seminars_voprs.php">������� � ���������</a></li>
				</ul>
			</li>
			<li><a href="#" title="������� �������">����. �������</a>
				<ul>
					<li><a href="edu_process.php?work_type=2">������������ ������</a></li>
					<li><a href="edu_process.php?work_type=3">����������� ������</a></li>
					<li><a href="edu_process.php?work_type=4">�������� ������</a></li>
					<li><a href="edu_process.php?work_type=1">��������</a></li> 
					<li><a href="test.php">������������</a></li>
				</ul>
			</li>
			<li><a href="#">���������</a>
			  <ul>
			   <li><a href="edu_process.php?work_type=5">������������ ���������</a></li>
			  </ul> 
			</li>
			<li><a href="#">�����</a>
				<ul>
					<li><a href="mail.php">�������� �������</a></li> 
					<li><a href="mail_messages.php?action=messages&id=1">�������� �����-��</a></li>
					<li><a href="mail_messages.php?action=index">���������</a></li>       
				</ul>
			</li>
			<li><a href="zachetka.php" title="�������� ������">�����. ������</a></li>
			<li><a href="complaints.php" title="��������������� ����� � �������� ������������">��� ������</a></li>			
			<li><a href="zayavlenie.php" title="��������� �� IP ������">���������</a></li> 
			<li><a href="#">���������</a>
			  <ul>
			      <li><a href="<?php/* echo 'http://'.$_SERVER["SERVER_NAME"].'/change_login.php'; */?>">������� ������</a></li>
				  <li><a href="<?php/* echo 'http://'.$_SERVER["SERVER_NAME"].'/settings.php';*/?>">������� ������</a></li>
			  </ul>
			 </li>
			<li><a href="index.php?exit" onClick="return confirm('�� ������������� ������ ����� �� �������?')">�����</a></li>
		</ul>
	   
     </td>
    </tr>
   </table>
   
   -->
   <?php
   include_once $_SERVER['DOCUMENT_ROOT'].'/includes/db_sql_connect.php';
   mssql_query("SET ANSI_NULLS ON");
 mssql_query("SET ANSI_WARNINGS ON");
   ?>
      
    <header id="header" role="banner">
        <div class="container">
            <div id="navbar" class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                     <a style="padding:5px;" class="navbar-brand" href="index.php">
					 <?php
						
						
						$fakultet_sql = mssql_query( "select fk.��������� as fak

												from [L503-SERVER-UMO\MMIS].[�������].[dbo].[���_��������] st
												inner join [L503-SERVER-UMO\MMIS].[�������].[dbo].[���_������] gr
												on st.[���_������] = gr.���
												inner join [L503-SERVER-UMO\MMIS].[�������].[dbo].[����������] fk
												on gr.���_���������� = fk.���

												where st.[���] =".$_SESSION['id_mmis']  );
												
												
												
						$asdf = mssql_fetch_array( $fakultet_sql );
						if ($asdf['fak'] == "�����") 
                     {						echo "�����";
					          $_SESSION['fak'] = '�����';					 }
						
						Else{ echo "";
						      $_SESSION['fak'] = '���';		
						}
						
					 ?>
					 </a> 
					 <div style='margin-left:20px;'><b>
					 <?php echo $_SESSION['user_name']; ?>
					 </b></div>
                     <div style='margin-left:20px;'>
					 <?php echo $_SESSION['group_name']; ?>
					 </div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php"><i style="font-size:18px;" class="fa fa-home"></i></a></li>
							
						<li><a href="get_student_lit_plan.php">����������</a></li>
						
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">������� �������<b class="caret"></b></a>
								<ul class="dropdown-menu multi-level">
								
								<?php 
                   if ($_SESSION['fak']!= '�����') 
                   {				   
				   ?>
                                   <li><a href="get_student_ball.php">�������</a></li>			
                     <?php 
					 }
					 ?>

								   
                                   <li><a href="zachetka_sql.php" title="�������� ������">�������� ������</a></li>
								   <li class="divider"></li>								
			                        <li><a href="rasp_ochn.php">����������</a></li>
									<li><a href="indiv_uch_plan.php">������� ����</a></li>
									<li class="divider"></li>
									<li><a href="test.php">������������</a></li>
									<li><a href="academ_test.php">����� ������������� �������</a></li>
									<li><a href="edu_process.php?work_type=5">�������������� � ��������������</a></li> 
							    	<li><a href="portfolio.php">����������� ���������</a></li>
									<li><a href="get_stud_graph.php">������</a></li>
								</ul>
						</li>
						
					    <li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">�����<b class="caret"></b></a>
								<ul class="dropdown-menu multi-level">									
									<li><a href="mail_messages.php?action=messages&id=1">�������� ���������������</a></li>
									<li><a href="mail_messages.php?action=index">���������</a></li> 
									<li><a href="complaints.php" title="��������������� ����� � �������� ������������">��� ������</a></li>
								</ul>
						</li>
						<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">���������<b class="caret"></b></a>
								<ul class="dropdown-menu multi-level">									
									<li><a href="<?php echo 'http://'.$_SERVER["SERVER_NAME"].'/change_login.php';?>">������� ������</a></li>
				  <li><a href="<?php  echo 'http://'.$_SERVER["SERVER_NAME"].'/settings.php';?>">������� ������</a></li>
								</ul>
						</li>
						<li><a href="index.php?exit" onClick="return confirm('�� ������������� ������ ����� �� �������?')">�����</a></li>
						
						
						
                    </ul>
                </div>
            </div>
        </div>
    </header>
   
   

<section>
        <div class="container">
        <div style='height:78px'> </div>
		
		<div class='box first'>
		
    <div style="padding-left: 5; color: #333333; font-family: arial; font-size: 9pt; display: none; height:120px"  id="mail"></div>
   
<?php

if($_SESSION['ban'] == 1) echo '<font color=red><br><b>��������, ��� ��� ������ �� ���� ���������� � ���� ����������� �� ����� ����������!<br>
��������� �� ����� �������� ����� ����� ���� "�����".<br>������� ������������:<br>'.$_SESSION['reason'].'</b><br></font>';

$query_col_com = "SELECT COUNT(1) AS `col` FROM `complaints`
					WHERE `user_id` = ".$_SESSION['user']."
					AND `comment` = ''
					AND `status` = 0
					;";
$result_col_com = mysql_query($query_col_com);

$col_com = mysql_fetch_array($result_col_com);

if($col_com['col'] > 0)echo '<div style="font-family:arial;height: 120px; color:#ff0000;"><b>��������!!!</b><br>� ��� ������� ������ ��� ������������!!!<br>
<a href="complaints.php" class="link1">������� � ��������� �����</a></div>';

?>