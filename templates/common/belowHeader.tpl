<div class="row nav-menu">
                <div class="col-md-2 col-sm-3 columns">
                    <a href="home"><img class="logo logo-light" alt="Logo" src="/css/img/logo-light.png"></a>
                    <a href="home"><img class="logo logo-dark" alt="Logo" src="/css/img/logo-dark.png"></a>
                </div>

                <div class="col-md-10 col-sm-9 columns">
                    <ul class="menu">
                        <li><a href="home">Home</a></li>
                        <li class="has-dropdown"><a href="#">Categories</a>
                            <ul class="subnav">
                                {% for row in select %}
                                <li><a href="/{{row.category}}">{{row.category}}</a></li>
                                {% endfor %}
                            </ul>
                        </li>
                        <div style="display: none"><li class="has-dropdown"><a href="#">Half Width</a>
                            <div class="subnav subnav-halfwidth">
                                <div class="col-md-6">
                                    <h6 class="alt-font">Subnav Title</h6>
                                    <ul class="subnav">
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-6">
                                    <h6 class="alt-font">Subnav Title</h6>
                                    <ul class="subnav">
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="has-dropdown"><a href="#">Fullwidth</a>
                            <div class="subnav subnav-fullwidth">
                                <div class="col-md-3">
                                    <h6 class="alt-font">Subnav Title</h6>
                                    <ul class="subnav">
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <h6 class="alt-font">Subnav Title</h6>
                                    <ul class="subnav">
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <h6 class="alt-font">Subnav Title</h6>
                                    <ul class="subnav">
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-3">
                                    <h6 class="alt-font">Subnav Title</h6>
                                    <ul class="subnav">
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                        <li><a href="#">Example</a></li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                    <ul class="social-icons text-right">
                        <li>
                            <a href="#">
                                <i class="icon social_twitter"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon social_facebook"></i>
                            </a>
                        </li>

                        <li>
                            <a href="#">
                                <i class="icon social_instagram"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="mobile-toggle">
                <i class="icon icon_menu"></i>
            </div>

        </div>
    </nav>

</div>
