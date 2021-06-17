@include('header', [ 'title' => 'Akış', 'page' => 'flow' ])

<div class="wrapper">
    <header class="bg-secondary">
        <div class="container">
            <div class="header-data">
                <div class="logo">
                    <a href="index.html" title=""><img src="/assets/images/logo.png" alt=""></a>
                </div>
                <div class="search-bar">
                    <form>
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit"><i class="la la-search"></i></button>
                    </form>
                </div>
                <nav>
                    <ul>
                        <li>
                            <a href="index.html" title="">
                                <span><img src="/assets/images/icon1.png" alt=""></span> Ana Sayfa
                            </a>
                        </li>

                        <li>
                            <a href="profiles.html" title="">
                                <span><img src="/assets/images/icon4.png" alt=""></span> Arkadaşlar
                            </a>

                        </li>

                        <li>
                            <a href="index.html" title="">
                                <span><img src="/assets/images/icon1.png" alt=""></span> Etkinlikler
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="menu-btn">
                    <a href="#" title=""><i class="fa fa-bars"></i></a>
                </div>
                <div class="user-account">
                    <div class="user-info">
                        <img src="/assets/images/resources/user.png" alt="">
                        <a href="#" title="">John</a>
                        <i class="la la-sort-down"></i>
                    </div>
                    <div class="user-account-settingss" id="users">
                        <h3>Çevrimiçi Durumu</h3>
                        <ul class="on-off-status">
                            <li>
                                <div class="fgt-sec">
                                    <input type="radio" name="cc" id="c5">
                                    <label for="c5">
                                        <span></span>
                                    </label>
                                    <small>Çevrimiçi</small>
                                </div>
                            </li>
                            <li>
                                <div class="fgt-sec">
                                    <input type="radio" name="cc" id="c6">
                                    <label for="c6">
                                        <span></span>
                                    </label>
                                    <small>Çevrimdışı</small>
                                </div>
                            </li>
                        </ul>

                        <h3>Ayarlar</h3>
                        <ul class="us-links">
                            <li><a href="profile-account-setting.html" title="">Hesap Ayarları</a></li>
                            <li><a href="#" title="">Gizlilik</a></li>

                            <li><a href="#" title="">Şartlar & Koşullar</a></li>
                        </ul>
                        <h3 class="tc"><a href="sign-in.html" title="">Çıkış Yap</a></h3>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="main-section">
            <div class="container">
                <div class="main-section-data">
                    <div class="row">
                        <div class="col-lg-3 col-md-4 pd-left-none no-pd">

                        </div>
                        <div class="col-lg-6 col-md-8 no-pd">
                            <div class="main-ws-sec">
                                <div class="post-topbar">
                                    <div class="user-picy">
                                    </div>
                                    <div class="post-st">
                                        <ul>
                                            <li><a class="post_project bg-primary" href="#" title="">Etkinlik Oluştur</a></li>
                                            <li><a class="post-jb bg-secondary" href="#" title=""> Paylaşım Oluştur</a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="posts-section">
                                    @livewire('posts')
                                          
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </main>
    <div class="post-popup pst-pj">
        <div class="post-project">
            <h3 class="bg-primary">Etkinlik Oluştur</h3>
            <div class="post-project-fields">
                <form action="/event" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="container mt-4">
                        </div>
                        <div class="col-lg-12">
                            <label for="">Etkinlik Adı</label>
                            <input type="text" name="title" placeholder="Etkinlik Adı" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="">Etkinlikte Neler Yapılacak</label>
                            <input type="text" name="content" placeholder="Etkinlikte Neler Yapılacak" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Etkinlik Nerede Olacak</label>
                            <input type="text" name="address" placeholder="Etkinlik Nerede Olacak" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Başlangıç Tarihi</label>
                            <input type="date" name="start_date" placeholder="Başlangıç Tarihi" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="">Bitiş Tarihi</label>
                            <input type="date" name="due_date" placeholder="Bitiş Tarihi" class="form-control">
                        </div>

                        <div class="col-xs-12 col-sm-12 col-md-12">
                            <div class="form-group">
                                <strong>Resim Yükle:</strong>
                                <input type="file" name="file" class="form-control" placeholder="Post Title">
                                @error('image')
                                <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <ul>
                                <li><button class="active bg-primary" type="submit" value="post">Oluştur</button></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>
        </div>
    </div>
    <div class="post-popup job_post">
        <div class="post-project">
            <h3 class="bg-secondary">Paylaşım Oluştur</h3>
            <div class="post-project-fields">
                <form action="/post" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-lg-12">
                            <textarea name="title" class="form-control" placeholder="İçerik"></textarea>
                        </div>
                        <div class="">
                            <label for="formFileLg" class="form-label">Resim Yükle</label>
                            <input type="file" name="file" class="form-control form-control-lg" placeholder="Post Title">
                        </div>
                        <input type="hidden" name="type" value="1">
                        <div class="col-lg-12">
                            <ul>
                                <li><button class="bg-secondary" type="submit" value="post">Paylaş</button></li>
                            </ul>
                        </div>
                    </div>
                </form>
            </div>
            <a href="#" title=""><i class="la la-times-circle-o"></i></a>

        </div>
    </div>
</div>

@include('footer', array('page' => 'flow'))