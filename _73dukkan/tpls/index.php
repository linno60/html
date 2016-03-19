<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Dukkan</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
        <link rel="stylesheet" href="/css/addons/reset.css">
        <link rel="stylesheet" href="/css/addons/reset-elements.css">
        <link rel="stylesheet" href="/css/addons/data-flex.css">
        <link rel="stylesheet" href="/css/addons/data-tabs.css">
        <link rel="stylesheet" href="/css/addons/generic.css">  
        <link rel="stylesheet" href="/css/elements.css">  
        <link rel="stylesheet" href="/css/styles.css">  
        <script>
            var LAYOUT_WIDTH = 980;
            document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            window.onresize = function () {
                document.documentElement.style.fontSize = window.innerWidth < LAYOUT_WIDTH ? window.innerWidth / LAYOUT_WIDTH + 'px' : '1px';
            }
        </script>
    </head>
    <body>
        <header>
            <div class="header">
                <div class="lwrap" data-flex="-start between">
                    <a href="/" title="Return to the homepage" id="logo">
                        <img src="/images/logo.png" width="288" height="34" alt="Dukkan">
                    </a>
                    <div data-flex="-start">
                        <div class="shopping-cart" data-flex="axis">
                            <div data-flex="-center">
                                <i class="icon-cart"></i>
                                <div>
                                    <div class="cart">Sepetinizde 2 ürün bulunmakta.</div> 
                                    <span class="total">Toplam Tutar: <strong>223 TL</strong></span>
                                </div>
                            </div>
                            <a href="#" class="btn btn-cart">kasaya git</a>
                        </div>
                        <div>
                            <div class="login-wrap" data-flex="-center" data-childs="-center">
                                <a href="#"><i class="icon-lock"></i>ÜYE <strong>GİRİŞİ</strong></a>
                                <a href="#"><i class="icon-user"></i>ÜYE <strong>OL</strong></a>
                            </div>
                            <div data-flex="end">
                                <a href="#" class="social">sosyal ağlarda biz</a> 
                            </div>
                        </div>  
                    </div>
                </div>
            </div>
            <div class="topbar">
                <div class="lwrap" data-flex="axis">
                    <nav class="links-nav" data-flex="w">
                        <a href="#" class="active">Anasayfa</a>
                        <a href="#">Hakkimizda</a>
                        <a href="#">Basinda Biz</a>
                        <a href="#">İletişim</a>
                    </nav>
                    <div class="links-social" data-flex="end w">
                        <a href="#"><i class="icon-f"></i></a>
                        <a href="#"><i class="icon-tw"></i></a>
                        <a href="#"><i class="icon-ff"></i></a>
                        <a href="#"><i class="icon-gp"></i></a>
                    </div>
                </div> 
            </div>
        </header>
        <div class="lwrap">
            <div class="content-bar" data-flex="axis">
                <div class="links-top" data-flex="w">
                    <a href="#">Sizin İçin <strong>Seçtiklerimiz </strong></a>
                    <a href="#">En Çok <strong>Satanlar</strong></a>
                    <a href="#">En <strong>Yeniler</strong></a>
                    <a href="#">İndirimdekiler</a>
                </div>
                <a href="#" class="fb-like"><img src="/images/fb-like.png" width="145" height="24" alt=""></a>
                <div data-flex="-center">
                    <form class="form-search">
                        <div data-flex="-center">
                            <input type="image" name="image" src="/images/icons/search.png">
                            <input type="search" name="search" placeholder="Arama Yap">
                        </div>
                    </form>
                    <a href="#" class="btn btn-search">ara</a>
                </div>
            </div>
            <div data-flex="stripe">
                <aside class="sidebar">
                    <div>
                        <h3 class="hdr">Reyonda Neler Var?</h3>
                        <div class="links-product" data-flex="col">
                            <a href="#">Antikalar & Sanat</a>
                            <a href="#" class="active">Bebek & Anne</a>
                            <a href="#">Bilgisayar</a>
                            <a href="#">Cep Telefonu & PDA</a>
                            <a href="#">DVD, Film & TV</a>
                            <a href="#">Ev, Dekorasyon | Bahçe</a>
                            <a href="#">Elektronik</a>
                            <a href="#">Ev Elektroniği</a>
                            <a href="#">Fotoğraf & Kamera</a>
                            <a href="#">GG Garaj</a>
                            <a href="#">Giyim & Aksesuar</a>
                            <a href="#">Kitap & Dergiler</a>
                            <a href="#">Koleksiyon</a>
                            <a href="#">Mücevher | Takı | Saat</a>
                            <a href="#">Müzik, Plak, Enstrüman</a>
                            <a href="#">Oyuncak & Hobi</a>
                            <a href="#">Sağlık & Kozmetik</a>
                            <a href="#">Seyahat</a>
                            <a href="#">Spor</a>
                            <a href="#">Video Oyun & Konsol</a>
                            <a href="#">Yiyecek ve İçecek</a>
                            <a href="#">Diğer Herşey</a>
                        </div>
                    </div>
                    <div>
                        <h3 class="hdr">Yeni Ürünler</h3>
                        <div class="new-products" data-childs="-start">
                            <div>
                                <figure><img src="/images/sidebar.png" width="55" height="66" alt=""></figure>
                                <div>
                                    <h5><a href="#">Book Safe – Kitap Kasa</a></h5>
                                    <p>Değerli eşyalarınız bu çok güvende olacak</p>
                                    <span class="price">39.90 TL</span>
                                </div>
                            </div>
                            <div>
                                <figure><img src="/images/sidebar.png" width="55" height="66" alt=""></figure>
                                <div>
                                    <h5><a href="#">Book Safe – Kitap Kasa</a></h5>
                                    <p>Değerli eşyalarınız bu çok güvende olacak</p>
                                    <span class="price">39.90 TL</span>
                                </div>
                            </div>
                            <div>
                                <figure><img src="/images/sidebar.png" width="55" height="66" alt=""></figure>
                                <div>
                                    <h5><a href="#">Book Safe – Kitap Kasa</a></h5>
                                    <p>Değerli eşyalarınız bu çok güvende olacak</p>
                                    <span class="price">39.90 TL</span>
                                </div>
                            </div>
                            <div>
                                <figure><img src="/images/sidebar.png" width="55" height="66" alt=""></figure>
                                <div>
                                    <h5><a href="#">Book Safe – Kitap Kasa</a></h5>
                                    <p>Değerli eşyalarınız bu çok güvende olacak</p>
                                    <span class="price">39.90 TL</span>
                                </div>
                            </div>
                            <div>
                                <figure><img src="/images/sidebar.png" width="55" height="66" alt=""></figure>
                                <div>
                                    <h5><a href="#">Book Safe – Kitap Kasa</a></h5>
                                    <p>Değerli eşyalarınız bu çok güvende olacak</p>
                                    <span class="price">39.90 TL</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mail-wrap">
                        <h3 class="hdr-mail"><strong>haberin </strong> olsun</h3>
                        <form action="#" method="post">
                            <label><strong>Yeniliklerden</strong> ilk sen haberdar olmak istermisin?</label>
                            <input type="email" name="email" placeholder="E-Mail adresinizi yazin">
                            <button><span class="btn btn-submit">GÖNDER</span></button>
                        </form>
                    </div>
                </aside>
                <div class="content">
                    <div data-flex="-start between">
                        <div class="slider" data-flex="col -center">
                            <figure><img src="/images/slider.png" width="469" height="275" alt=""></figure>
                            <div class="thumbs" data-flex="stripe">
                                <a href="#" class="btn btn-thumb prev"><i class="icon-prev"></i></a>
                                <div class="links-controls" data-flex="-center center">
                                    <a href="#"></a>
                                    <a href="#" class="active"></a>
                                    <a href="#"></a>
                                    <a href="#"></a>
                                    <a href="#"></a>
                                </div>
                                <a href="#" class="btn btn-thumb next"><i class="icon-next"></i></a>
                            </div>
                        </div>
                        <div class="offer">
                            <div class="offers-list" data-flex="vaxis">
                                <h3 class="hdr-offer">Günün Fırsatları</h3>
                                <div data-childs="-start">
                                    <div>
                                        <figure><img src="/images/w.png" width="42" height="51" alt=""></figure>
                                        <div>
                                            <h5><a href="#">Book Safe - Kitap Kasa</a></h5>
                                            <span class="price">39,90 tl<strike>68,90 tl</strike></span>
                                        </div>
                                    </div>
                                    <div>
                                        <figure><img src="/images/w.png" width="42" height="51" alt=""></figure>
                                        <div>
                                            <h5><a href="#">Book Safe - Kitap Kasa</a></h5>
                                            <span class="price">39,90 tl<strike>68,90 tl</strike></span>
                                        </div>
                                    </div>
                                    <div>
                                        <figure><img src="/images/w.png" width="42" height="51" alt=""></figure>
                                        <div>
                                            <h5><a href="#">Book Safe - Kitap Kasa</a></h5>
                                            <span class="price">39,90 tl<strike>68,90 tl</strike></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="btns" data-flex>
                                    <a href="#" class="btn btn-up"></a>
                                    <a href="#" class="btn btn-down"></a>
                                </div>
                            </div>
                            <div class="discount" data-flex="around" data-childs="col -center">
                                <div>
                                    <a href="#"><img src="/images/world.png" width="94" height="18" alt=""></a>
                                    <span>%5 indirimler</span>
                                    <strong>9+3 Taksit</strong>
                                </div>
                                <div>
                                    <a href="#"><img src="/images/bonus.png" width="93" height="17" alt=""></a href="#">
                                    <span>Peşin Fiyatına</span>
                                    <strong>9+3 Taksit</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="product-items" data-flex="stripe w" data-childs="-start between">
                        <article>
                            <div data-flex="center"><figure><img src="/images/img1.png" width="113" height="125" alt=""></figure></div>
                            <div>
                                <h4><a href="#">True Utility - Cash Stash Keychain</a></h4>
                                <small>Suda zıp zıplayan top</small>
                                <p>Rock yıldızı olmaya çıkan kestrime yol! Dünyaları harcamadan gerçek bir profesyonel gibi gitar çalabilmek mükemmel olmaz mıydı? Paper Jamz ile bu mümkün...</p>
                                <span class="price">69,90 TL</span>
                                <div data-flex="-center">
                                    <a href="#" class="btn btn-default">incecele</a>
                                    <a href="#" class="btn btn-add"><i class="icon-cart-alt"></i>sepete at</a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div data-flex="center"><figure><img src="/images/img2.png" width="116" height="129" alt=""></figure></div>
                            <div>
                                <h4><a href="#">True Utility - Cash Stash Keychain</a></h4>
                                <small>Suda zıp zıplayan top</small>
                                <p>Rock yıldızı olmaya çıkan kestrime yol! Dünyaları harcamadan gerçek bir profesyonel gibi gitar çalabilmek mükemmel olmaz mıydı? Paper Jamz ile bu mümkün...</p>
                                <span class="price">69,90 TL</span>
                                <div data-flex="-center">
                                    <a href="#" class="btn btn-default">incecele</a>
                                    <a href="#" class="btn btn-add"><i class="icon-cart-alt"></i>sepete at</a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div data-flex="center"><figure><img src="/images/img3.png" width="121" height="80" alt=""></figure></div>
                            <div>
                                <h4><a href="#">True Utility - Cash Stash Keychain</a></h4>
                                <small>Suda zıp zıplayan top</small>
                                <p>Rock yıldızı olmaya çıkan kestrime yol! Dünyaları harcamadan gerçek bir profesyonel gibi gitar çalabilmek mükemmel olmaz mıydı? Paper Jamz ile bu mümkün...</p>
                                <span class="price">69,90 TL</span>
                                <div data-flex="-center">
                                    <a href="#" class="btn btn-default">incecele</a>
                                    <a href="#" class="btn btn-add"><i class="icon-cart-alt"></i>sepete at</a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div data-flex="center"><figure><img src="/images/img4.png" width="113" height="146" alt=""></figure></div>
                            <div>
                                <h4><a href="#">True Utility - Cash Stash Keychain</a></h4>
                                <small>Suda zıp zıplayan top</small>
                                <p>Rock yıldızı olmaya çıkan kestrime yol! Dünyaları harcamadan gerçek bir profesyonel gibi gitar çalabilmek mükemmel olmaz mıydı? Paper Jamz ile bu mümkün...</p>
                                <span class="price">69,90 TL</span>
                                <div data-flex="-center">
                                    <a href="#" class="btn btn-default">incecele</a>
                                    <a href="#" class="btn btn-add"><i class="icon-cart-alt"></i>sepete at</a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div data-flex="center"><figure><img src="/images/img5.png" width="104" height="160" alt=""></figure></div>
                            <div>
                                <h4><a href="#">True Utility - Cash Stash Keychain</a></h4>
                                <small>Suda zıp zıplayan top</small>
                                <p>Rock yıldızı olmaya çıkan kestrime yol! Dünyaları harcamadan gerçek bir profesyonel gibi gitar çalabilmek mükemmel olmaz mıydı? Paper Jamz ile bu mümkün...</p>
                                <span class="price">69,90 TL</span>
                                <div data-flex="-center">
                                    <a href="#" class="btn btn-default">incecele</a>
                                    <a href="#" class="btn btn-add"><i class="icon-cart-alt"></i>sepete at</a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div data-flex="center"><figure><img src="/images/img6.png" width="116" height="129" alt=""></figure></div>
                            <div>
                                <h4><a href="#">True Utility - Cash Stash Keychain</a></h4>
                                <small>Suda zıp zıplayan top</small>
                                <p>Rock yıldızı olmaya çıkan kestrime yol! Dünyaları harcamadan gerçek bir profesyonel gibi gitar çalabilmek mükemmel olmaz mıydı? Paper Jamz ile bu mümkün...</p>
                                <span class="price">69,90 TL</span>
                                <div data-flex="-center">
                                    <a href="#" class="btn btn-default">incecele</a>
                                    <a href="#" class="btn btn-add"><i class="icon-cart-alt"></i>sepete at</a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div data-flex="center"><figure><img src="/images/img7.png" width="113" height="87" alt=""></figure></div>
                            <div>
                                <h4><a href="#">True Utility - Cash Stash Keychain</a></h4>
                                <small>Suda zıp zıplayan top</small>
                                <p>Rock yıldızı olmaya çıkan kestrime yol! Dünyaları harcamadan gerçek bir profesyonel gibi gitar çalabilmek mükemmel olmaz mıydı? Paper Jamz ile bu mümkün...</p>
                                <span class="price">69,90 TL</span>
                                <div data-flex="-center">
                                    <a href="#" class="btn btn-default">incecele</a>
                                    <a href="#" class="btn btn-add"><i class="icon-cart-alt"></i>sepete at</a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div data-flex="center"><figure><img src="/images/img8.png" width="106" height="95" alt=""></figure></div>
                            <div>
                                <h4><a href="#">True Utility - Cash Stash Keychain</a></h4>
                                <small>Suda zıp zıplayan top</small>
                                <p>Rock yıldızı olmaya çıkan kestrime yol! Dünyaları harcamadan gerçek bir profesyonel gibi gitar çalabilmek mükemmel olmaz mıydı? Paper Jamz ile bu mümkün...</p>
                                <span class="price">69,90 TL</span>
                                <div data-flex="-center">
                                    <a href="#" class="btn btn-default">incecele</a>
                                    <a href="#" class="btn btn-add"><i class="icon-cart-alt"></i>sepete at</a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div data-flex="center"><figure><img src="/images/img9.png" width="108" height="103" alt=""></figure></div>
                            <div>
                                <h4><a href="#">True Utility - Cash Stash Keychain</a></h4>
                                <small>Suda zıp zıplayan top</small>
                                <p>Rock yıldızı olmaya çıkan kestrime yol! Dünyaları harcamadan gerçek bir profesyonel gibi gitar çalabilmek mükemmel olmaz mıydı? Paper Jamz ile bu mümkün...</p>
                                <span class="price">69,90 TL</span>
                                <div data-flex="-center">
                                    <a href="#" class="btn btn-default">incecele</a>
                                    <a href="#" class="btn btn-add"><i class="icon-cart-alt"></i>sepete at</a>
                                </div>
                            </div>
                        </article>
                        <article>
                            <div data-flex="center"><figure><img src="/images/img10.png" width="107" height="108" alt=""></figure></div>
                            <div>
                                <h4><a href="#">True Utility - Cash Stash Keychain</a></h4>
                                <small>Suda zıp zıplayan top</small>
                                <p>Rock yıldızı olmaya çıkan kestrime yol! Dünyaları harcamadan gerçek bir profesyonel gibi gitar çalabilmek mükemmel olmaz mıydı? Paper Jamz ile bu mümkün...</p>
                                <span class="price">69,90 TL</span>
                                <div data-flex="-center">
                                    <a href="#" class="btn btn-default">incecele</a>
                                    <a href="#" class="btn btn-add"><i class="icon-cart-alt"></i>sepete at</a>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="links-footernav lwrap" data-flex="center w">
                <a href="#">Anasayfa</a>
                <a href="#">En Çok Satanlar</a>
                <a href="#">En Yeni Ürünler</a>
                <a href="#">Seçtiklerimiz</a>
                <a href="#">Üye Ol</a>
                <a href="#">Haberler</a>
                <a href="#">Sepetim</a>
                <a href="#">Hakkında</a>
                <a href="#">Basında</a>
                <a href="#">İletişim</a>
            </div>
            <div class="footer">
                <div class="lwrap">
                    <div class="links-footer" data-flex="-center center w">
                        <a href="#">Ses ve Görüntü Sistemleri</a>|
                        <a href="#">Elektrikli Ev Aletleri</a>|
                        <a href="#">Uydu Alıcıları</a>|
                        <a href="#">Foto ve Kamera</a>|
                        <a href="#">Mp3 Player</a>|
                        <a href="#">Isıtma ve Soğutma</a>|
                        <a href="#">Ofis Makineleri</a>|
                        <a href="#">Oyun Konsollar</a>|
                        <a href="#">Hava Temizleme Cihazları</a>|
                        <a href="#">Hava Temizleme Cihazları</a>|
                        <a href="#">Hava Temizleme Cihazları</a>|
                        <a href="#">Hava Temizleme Cihazları</a>
                    </div>
                    <div>
                        <div class="tweet" data-flex="-center">
                            <i class="icon-birds"></i>
                            <p><a href="#">@1renk.com</a> buraya twitterten son bilgiler çekilebilir son atılan twit vs.</p>
                        </div>
                        <a href="#" class="btn btn-footer">1renk.com</a>
                    </div>
                </div>   
            </div>
        </footer>
        <script src="/js/jquery/jquery-2.1.4.min.js"></script>
        <script src="/js/tabs-accordions.js"></script>
        <script src="/js/index.js"></script>
    </body>
</html>