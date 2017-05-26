        <footer>
            <ul>
                <li>
                    <a href="/mobile">
                        <i class="footer_home footer_icon"></i>
                        <p>首页</p></a>
                    </a>
                </li>
                <li>
                    <?php if(session('tc_phone') != null): ?>
                        <a href="/mobile/teacherinfo.html">
                            <i class="footer_my footer_icon" style="width:.38rem;"></i>
                            <p>我的</p>
                        </a>
                    <?php elseif(session('st_phone') != null): ?>
                        <a href="/mobile/stinfo.html">
                            <i class="footer_my footer_icon" style="width:.38rem;"></i>
                            <p>我的学员</p>
                        </a>
                    <?php else: ?>
                        <a href="/mobile/login.html">
                            <i class="footer_my footer_icon" style="width:.38rem;"></i>
                            <p>我的</p>
                        </a>
                    <?php endif; ?>
                </li>
                <li>
                        <i class="footer_zx footer_icon"></i>
                    <a href="https://hztk5.kuaishang.cn/bs/im.htm?cSource=1&cas=69564___125636&fi=79140&ri=18250381975&vi=b91fa36776ee4ca0bac77f7af86e3d04&ism=1&dp=http%3A%2F%2Fwww.delijiajiao.com%2Fmobile&_d=1495518714221324&_tk=b9cc3dd4">
                        <p>在线咨询</p>
                    </a>

                </li>
                <li>
                        <i class="footer_phone footer_icon"></i>
                        <a href="tel:<?php echo e(session('phone')); ?>"><p>电话咨询</p></a>
                </li>
            </ul>
        </footer>
