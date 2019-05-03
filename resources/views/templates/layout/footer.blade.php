<?php
    $setting = Cache::get('setting');
    $categories = DB::table('product_categories')->where('status',1)->where('parent_id',0)->get();
?>
<div id="colophon" class="site-footer">
    <div class="footer-in">
       <div class="footer-bar">
          <div class="container">
             <div class="row">
                <div class="col-sm-4 col-bar col-banner-orange">
                   <a href="#giaohangModal" data-toggle="modal" title="Vận chuyển">
                      <div class="banner-item on-left banner-orange">
                         <h4>GIAO HÀNG </h4>
                         <p>Miễn phí nội thành Hà Nội, HCM</p>
                         <span class="button iphonehide">Xem</span> 
                         <i class="fa fa-truck" aria-hidden="true"></i>
                      </div>
                   </a>
                </div>
                <div class="col-sm-4 col-bar col-banner-blue">
                   <a href="#thanhtoanModal" data-toggle="modal" title="Hướng dẫn thanh toán">
                      <div class="banner-item on-left banner-blue">
                         <h4>THANH TOÁN</h4>
                         <p>Thanh toán đơn giản trong 1 bước</p>
                         <span class="button iphonehide">Xem</span> 
                         <i class="fa fa-credit-card" aria-hidden="true"></i>
                      </div>
                   </a>
                </div>
                <div class="col-sm-4 col-bar col-banner-grey">
                   <a href="#doitraModal" data-toggle="modal" title="Hướng dẫn đổi trả hàng">
                      <div class="banner-item on-right banner-grey">
                         <h4>ĐỔI TRẢ HÀNG</h4>
                         <p>Thời gian đổi trả hàng lên đến 30 ngày</p>
                         <i class="fa fa-refresh" aria-hidden="true"></i>
                      </div>
                   </a>
                </div>
             </div>
          </div>
       </div>
       <div class="footer-info">
          <div class="container">
             <div class="footer-info-in">
                <div class="footer-network footer-pad">
                   <div class="row">
                      <div class="col-sm-8 footer-newleter">
                         <span class="span-title">Nhận bản tin</span>
                         <div class="widget_wysija_cont">
                            <div id="msg-form-wysija-2" class="wysija-msg ajax"></div>
                            <form id="form-wysija-2" method="post" action="#wysija" class="widget_wysija">
                               <p class="wysija-paragraph">
                                  <input type="text" name="wysija[user][email]" class="wysija-input validate[required,custom[email]]" title="Nhập e-mail nhận bản tin khuyến mại..." placeholder="Nhập e-mail nhận bản tin khuyến mại..." value="">
                                  <span class="abs-req">
                                  <input type="text" name="wysija[user][abs][email]" class="wysija-input validated[abs][email]" value="">
                                  </span>
                               </p>
                               <input class="wysija-submit wysija-submit-field" type="submit" value="Đăng ký">
                               <input type="hidden" name="form_id" value="1">
                               <input type="hidden" name="action" value="save">
                               <input type="hidden" name="controller" value="subscribers">
                               <input type="hidden" value="1" name="wysija-page">
                               <input type="hidden" name="wysija[user_list][list_ids]" value="1">
                            </form>
                         </div>
                      </div>
                      <div class="col-sm-4 footer-social">
                         <div class="footer-social-in">
                            <div class="textwidget">
                               <span>FOLLOW US</span>
                               <ul class="left">
                                  <li title="Google+" data-placement="top" data-toggle="tooltip" class="social-googleplus tooltip-hover"><a target="_blank" href="{{$setting->google}}"></a></li>
                                  <li title="Facebook" data-placement="top" data-toggle="tooltip" class="social-facebook tooltip-hover"><a target="_blank" href="{{$setting->facebook}}" a=""></a></li>
                                  <li title="Youtube" data-placement="top" data-toggle="tooltip" class="social-youtube tooltip-hover"><a target="_blank" href="{{$setting->youtube}}"></a></li>
                               </ul>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <div class="footer-contact footer-pad">
                   <div class="footer-adress">
                      <div class="textwidget">
                         <p><strong>{{$setting->name}}</strong></p>
                         <p><strong> Văn phòng tại Hà Nội:</strong></p>
                         <p>{{$setting->address}}</p>
                      
                         <p>Hotline: {{$setting->phone}} - {{$setting->hotline}}</p>
                         <p>Zalo: {{$setting->phone}} </p>
                      </div>
                   </div>
                </div>
                <div class="footer-notice footer-pad11">
                </div>
             </div>
          </div>
       </div>
       <div class="footer-copyright">
          <div class="container">
             <div class="textwidget">© 2017 Mỹ phẩm Ohui Hàn Quốc - All rights reserved. Thiết kể bởi <a target="__blank" href="http://tainangtrevietnam.com/">Tài năng trẻ Việt Nam</a>.</div>
          </div>
       </div>
    </div>
</div>
