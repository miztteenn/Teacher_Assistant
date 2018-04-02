<style>
    nav{
        padding-left:70px !important;
        padding-right:70px !important; 
        box-shadow: 5px 0px 20px 2px #888888;
    }
</style>

<div class="container-fluid">
    
    
    <nav class="navbar fixed-top navbar navbar-expand-md bg-light navbar-light">
    <!-- Brand -->
    <a class="navbar-brand" href="#">Navbar</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="?controller=work&action=index_work">หน้าแรก</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">จัดการงาน</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="?controller=report&action=index_reportMonth">สถิติ</a>
        </li>
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                จัดการระบบ
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="?controller=userMm&action=index_workMm">จัดการงานของผู้ใช้</a>
                    <a class="dropdown-item" href="?controller=userMm&action=index_userMm">จัดการบัญชีผู้ใช้</a>
                    <a class="dropdown-item" href="?controller=yearSet&action=index_year">ตั้งค่าปีการศึกษา</a>
                </div>
            </li>  
        </ul>
        <ul class="navbar-nav ml-auto">
            <?php if($_SESSION['member']['type'] != 'นิสิต') { ?>
            <li class="nav-item">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus-circle" ></i> สั่งงาน</a>
            </li> 
            <?php } ?>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                <img src="<?php echo $_SESSION['member']['img_user'] ?>" alt="" width=40> <?php echo $_SESSION['member']['username'] ?>
                </a>
                <div class="dropdown-menu">
                <a class="dropdown-item" href="?controller=userSet&action=index_userSet"><i class="fa fa-cog"></i> ตั้งค่าบัญชีผู้ใช้</a>
                <a class="dropdown-item" href="?controller=identify&action=logout"><i class="fa fa-sign-out"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div> 
    </nav>
</div>
</br></br></br>
<?php if($_SESSION['member']['type'] != 'นิสิต') { ?>
<!-- The Modal -->
<div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
            <h4 class="modal-title">กรอกรายละเอียดงาน</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            <form method="POST">
                <div class="row">   
                    <div class="col-6">
                        <label>หัวข้องาน</label><input type="text" name="title" class="form-control">
                        <label>รายละเอียดงาน</label><textarea name="detail"cols="30" rows="10" class="form-control"></textarea>
                    </div>
                    <div class="col-6">
                        <label>วันที่เริ่มงาน</label><input type="date" name="time_start" id="txtFromDate" class="form-control" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                        <label>วันที่ส่งงาน</label><input type="date" name="time_stop" id="txtToDate" class="form-control" pattern="[0-9]{4}-[0-9]{2}-[0-9]{2}">
                    </div>
                </div>
                <input type="hidden" name="controller" value="work">
                
            
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
            <button type="submit" class="btn btn-success btn-block" name="action" value="addWork">สั่งงาน</button>
            </form>
        </div>

        </div>
    </div>
    </div>
<?php } ?>