<?php
    include 'counters.php';
?>
<button onclick="menu()" class="btn1 menu-shown" id="btn1"><i class="fa fa-list"></i></button>
    <div class="menu shown" id="menu">
        <ul>
            <li class="profile">
                <div>
                    <i class="fa fa-user-circle" aria-hidden="true" style="font-size: 50px; color: black;"></i>
                </div>
                <h2><?php echo $_SESSION['fullname']; ?><br>
                    <span><?php echo $_SESSION['u_email']."<br>"; ?></span>
                    <span style="color: black; font-size:18px;">
                            <?php
                                $a = date("h");
                                $b = $a + 2 ;
                                echo "<br>".date("$b:i:s")."&ensp;"."&ensp;".
                                date("Y-m-d");
                            ?>
                    </span>
                </h2>
            </li>
            <li>
                <a href="dashboard.php" class="active" style="color: #1363DF;">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                    <p>الصفحة الرئيسية</p>
                </a>
            </li>
            <li>
                <a href="#" class="active" onclick="optionshow()" id="active" style="color: #1363DF;">
                    <i class="fa fa-users"></i>
                    <p>نقطة المستخدمين <i class="fa-solid fa-caret-right"></i></p>
                </a>
                <!--  -->
                <a href="#" class="active2" onclick="optionhide()" style="display: none; color: #1363DF;" id="active2">
                    <i class="fa fa-users"></i>
                    <p>نقطة المستخدمين <i class="fa-solid fa-caret-down"></i></p>
                </a>
                <!--  -->
                <ul style="display: none;" id="option">
                    <li><a href="wakeel.php">
                            الوكلاء
                        <span style="margin-right: auto; color: white; font-weight: bolder; background-color: red; width: 35px; text-align:center; border-radius: 30%; font-size: 21px;"><?php if($r1 != 0){echo $r1.'+';} else{echo '';}?></span>
                        </a>
                    </li>
                    <li><a href="#">
                            المشرفين
                        </a>
                    </li>
                    <li><a href="allaccount.php">
                            جميع الحسابات
                        <span style="margin-right: auto; color: white; font-weight: bolder; background-color: red; width: 35px; text-align:center; border-radius: 30%; font-size: 21px;"><?php if($r2 != 0){echo $r2.'+';} else{echo '';}?></span>
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-wallet"></i>
                    <p>نقطة طلبات الدفع</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-chart-line"></i>
                    <p>نقطة السجل المالي</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-share"></i>
                    <p>نقطة تحويل الرصيد</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-s"></i>
                    <p>نقطة سيرياتيل</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-m"></i>
                    <p>نقطة MTN</p>
                </a>
            </li>
            <li>
                <a href="factories.php">
                    <i class="fa-solid fa-wifi"></i>
                    <p>نقطة مزودات الانترنت</p>
                    <span style="margin-right: auto; color: white; font-weight: bolder; background-color: red; width: 30px; text-align:center; border-radius: 30%; font-size: 21px;"><?php if($r3 != 0){echo $r3.'+';} else{echo '';}?></span>
                </a>
            </li>
            <li>
                <a href="payment-factory.php">
                    <i class="fa-solid fa-circle-dollar-to-slot"></i>
                    <p>نقطة خدمات التسديد</p>
                    <span style="margin-right: auto; color: white; font-weight: bolder; background-color: red; width: 30px; text-align:center; border-radius: 30%; font-size: 21px;"><?php if($r6 != 0){echo $r6.'+';} else{echo '';}?></span>
                </a>
            </li>
            <li>
                <a href="allprices.php">
                <i class="fa-solid fa-chart-simple"></i>
                    <p>لائحة التساعير</p>
                    <span style="margin-right: auto; color: white; font-weight: bolder; background-color: red; width: 35px; text-align:center; border-radius: 30%; font-size: 21px;"><?php if($r4 != 0){echo $r4.'+';} else{echo '';}?></span>
                </a>
            </li>
            <li>
                <a href="settings.php">
                    <i class="fa fa-gear"></i>
                    <p>نقطة الاعدادات الرئيسية</p>
                </a>
            </li>
        </ul>

        <div class="logout">
            <a href="logout.php">
                <i class="fa-solid fa-arrow-right-from-bracket"></i>
                <p> تسجيل الخروج</p>
            </a>
        </div>
    </div>