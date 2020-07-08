<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
?>
<div class="header">
<?php
$sql="SELECT * from tblpage where PageType='contactus'";
$query = $dbh -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);

$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $row)
{               ?>
                                    <?php $cnt=$cnt+1;}} ?>
           
            <div class="nav-wrapper" style="background-color:#273351"><!--main navigation-->
                <div class="container">
                    <!--Main Menu HTML Code-->
                    <nav class="wsmenu slideLeft clearfix" style="background-color:#273351">
                        <div class="logo pull-left"><a href="index.php" title="Responsive Slide Menus"><h3 style="color:#08c2f3">Local Service Search</h3></a></div>
                        <ul class="mobile-sub wsmenu-list pull-right">
                            <li><a href="index.php" class="" style="color:white">Home</a>
                                
                            </li>
                            
                            <li><a href="category.php" style="color:white">categories <span class="arrow"></span></a></li>
                           
                            <li><a href="user/login.php" style="color:white">Log In <span class="arrow"></span></a></li>
                            <li><a class="toolbar-new-listing  " style="color:blue" href="admin/login.php"><i class="fa fa-plus-circle"></i> Admin</a></li>
                            
                        </ul>
                    </nav>
                </div>
            </div><!--main navigation end-->
        </div>