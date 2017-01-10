<!--Page Body-->
      <div id="page-body" class="page-body">
        <section class="page-section bgc-light">
          <div class="container">
            <div class="row">
              <div class="col-md-4 hidden-sm hidden-xs">
                <aside class="page-sidebar">
                  <div class="widget widget-search">
                    <div class="__widget-content">
                      <form method="post" class="search-box">
                        <input type="search" placeholder="Search..."/>
                        <button type="submit"><i class="icon-search-icon"></i></button>
                      </form>
                    </div>
                  </div>
                  <div class="widget widget-categories">
                    <h6 class="__widget-title">KATEGORI LAIN</h6>
                    <ul class="__widget-content">
                      <?php
                        foreach ($kategori as $q_kategori) {
                          ?>
                              <li><a href="<?php echo base_url(); ?>berita-dan-pengumuman/<?php echo $q_kategori->type_ina ?>/<?php echo $q_kategori->id ?>"><?php echo ucwords($q_kategori->type_ina) ?></a></li>
                          <?php
                        }
                      ?>
                    </ul>
                  </div>
                  <div class="widget widget-recent-post">
                    <h6 class="__widget-title">RECENT POSTS</h6>
                    <div class="__widget-content">
                      <div class="rpost"><a href="#" class="__img"><img src="assets/images/blog/recent-post-thumbnail-1.jpg" alt="thumbnail"/></a>
                        <div class="__content">
                          <div class="__title"><a href="#">How To Improve And Refine</a></div>
                          <div class="__date font-serif-italic color-secondary">July 9, 2014</div>
                        </div>
                      </div>
                      <div class="rpost"><a href="#" class="__img"><img src="assets/images/blog/recent-post-thumbnail-2.jpg" alt="thumbnail"/></a>
                        <div class="__content">
                          <div class="__title"><a href="#">How To Improve And Refine</a></div>
                          <div class="__date font-serif-italic color-secondary">July 9, 2014</div>
                        </div>
                      </div>
                      <div class="rpost"><a href="#" class="__img"><img src="assets/images/blog/recent-post-thumbnail-3.jpg" alt="thumbnail"/></a>
                        <div class="__content">
                          <div class="__title"><a href="#">How To Improve And Refine</a></div>
                          <div class="__date font-serif-italic color-secondary">July 9, 2014</div>
                        </div>
                      </div>
                      <div class="rpost"><a href="#" class="__img"><img src="assets/images/blog/recent-post-thumbnail-4.jpg" alt="thumbnail"/></a>
                        <div class="__content">
                          <div class="__title"><a href="#">How To Improve And Refine</a></div>
                          <div class="__date font-serif-italic color-secondary">July 9, 2014</div>
                        </div>
                      </div>
                      <div class="rpost"><a href="#" class="__img"><img src="assets/images/blog/recent-post-thumbnail-5.jpg" alt="thumbnail"/></a>
                        <div class="__content">
                          <div class="__title"><a href="#">How To Improve And Refine</a></div>
                          <div class="__date font-serif-italic color-secondary">July 9, 2014</div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="widget widget-gallery">
                    <h6 class="__widget-title">INSTAGRAM GALLERY</h6>
                    <ul class="__widget-content magnific-gallery">
                      <li><a href="assets/images/vintage/vintage-1.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-1-thumbnail.jpg" alt="instagram image"/></a></li>
                      <li><a href="assets/images/vintage/vintage-2.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-2-thumbnail.jpg" alt="instagram image"/></a></li>
                      <li><a href="assets/images/vintage/vintage-3.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-3-thumbnail.jpg" alt="instagram image"/></a></li>
                      <li><a href="assets/images/vintage/vintage-4.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-4-thumbnail.jpg" alt="instagram image"/></a></li>
                      <li><a href="assets/images/vintage/vintage-5.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-5-thumbnail.jpg" alt="instagram image"/></a></li>
                      <li><a href="assets/images/vintage/vintage-6.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-6-thumbnail.jpg" alt="instagram image"/></a></li>
                      <li><a href="assets/images/vintage/vintage-7.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-7-thumbnail.jpg" alt="instagram image"/></a></li>
                      <li><a href="assets/images/vintage/vintage-8.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-8-thumbnail.jpg" alt="instagram image"/></a></li>
                      <li><a href="assets/images/vintage/vintage-9.jpg" class="zoom-button img-wrapper"><img src="assets/images/vintage/vintage-9-thumbnail.jpg" alt="instagram image"/></a></li>
                    </ul>
                  </div>
                  <div class="widget widget-social">
                    <h6 class="__widget-title">SOCIAL ICONS</h6>
                    <div class="__widget-content">
                      <ul class="social circle secondary">
                        <li><a href="#"><i class="icon icon-facebook-1"></i></a></li>
                        <li><a href="#"><i class="icon icon-twitter-1"></i></a></li>
                        <li><a href="#"><i class="icon icon-pinterest"></i></a></li>
                        <li><a href="#"><i class="icon icon-stumbleupon"></i></a></li>
                        <li><a href="#"><i class="icon icon-instagrem"></i></a></li>
                        <li><a href="#"><i class="icon icon-dribbble-1"></i></a></li>
                        <li><a href="#"><i class="icon icon-github"></i></a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="widget widget-tag">
                    <h6 class="__widget-title">POPULAR TAGS</h6>
                    <div class="__widget-content tags"><a href="#">Dress</a><a href="#">Mini</a><a href="#">Skate animal</a><a href="#">Lorem ipsum</a><a href="#">litterature</a><a href="#">Dress</a><a href="#">Mini</a><a href="#">Skate animal</a><a href="#">Lorem ipsum</a><a href="#">litterature</a><a href="#">Dress</a><a href="#">Mini</a><a href="#">Skate animal</a>
                    </div>
                  </div>
                  <div class="widget widget-twitter">
                    <h6 class="__widget-title">RECENT TWEETS</h6>
                    <div class="__widget-content">
                      <div class="twiter-item"><i class="__icon fa fa-twitter color-secondary"></i>
                        <div class="__content">
                          <div class="__title">#Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div><a href="#" class="__link color-secondary">http://bly.shotlinks.com</a>
                          <div class="__time font-serif-italic">October 23, 2015</div>
                        </div>
                      </div>
                      <div class="twiter-item"><i class="__icon fa fa-twitter color-secondary"></i>
                        <div class="__content">
                          <div class="__title">#Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div><a href="#" class="__link color-secondary">http://bly.shotlinks.com</a>
                          <div class="__time font-serif-italic">October 23, 2015</div>
                        </div>
                      </div>
                      <div class="twiter-item"><i class="__icon fa fa-twitter color-secondary"></i>
                        <div class="__content">
                          <div class="__title">#Lorem ipsum dolor sit amet, consectetur adipiscing elit. </div><a href="#" class="__link color-secondary">http://bly.shotlinks.com</a>
                          <div class="__time font-serif-italic">October 23, 2015</div>
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
              <div class="col-md-8 col-xs-12">
                <div class="post">
                  <div class="__main">
                    <div class="__title"><a href="blog-single-standard.html"><?php echo $berita->title_ina ?></a></div>
                    <div class="__meta"><span>Posted:&nbsp;<span class="__value">October 16, 2015 </span></span><span>By:&nbsp;<span class="__value">Admin</span></span><span>Categories:&nbsp;<span class="__value">HTML/CSS</span></span><span>Comment:&nbsp;<span class="__value">9</span></span>
                    </div>

                    <div class="__header blog-detail-thumb"><img src="http://www.unipasby.ac.id/css/data_images/news/<?php echo $berita->thumb ?>" alt="<?php echo $berita->title_ina ?>" class="img-responsive"/>
                    </div>

                    <div class="__content"><p><?php echo $berita->content_ina; ?></p></div>
                  </div>
                </div>
                <div class="post-tags clearfix">
                  <div class="tags"><span class="__title">TAGS:</span><a href="#">Dress</a><a href="#">Mini</a><a href="#">Skate animal</a><a href="#">Lorem ipsum</a><a href="#">litterature</a>
                  </div>
                  <div class="sharethis"><span class="__title">SHARE THIS POST</span>
                    <div class="blog-share-this btn btn-secondary"><span class="__text">SHARE<i class="icon-share"></i></span></div>
                  </div>
                </div>
                <div class="post-author clearfix">
                  <div class="__image"><img src="assets/images/team/team-member-4.jpg" alt="JOHN DOE" class="img-responsive"/></div>
                  <div class="__about">
                    <h6 class="smb">JOHN DOE</h6>
                    <p>John Doe is an aspiring artist and designer with a passion for the written word. Currently a student at the Rhode Island School of Design (RISD) majoring in Industrial Design, she enjoys heavy snowfalls and tackling assignments that make an insurmountable mess.</p>
                    <ul class="social circle primary">
                      <li><a href="#"><i class="icon icon-facebook-1"></i></a></li>
                      <li><a href="#"><i class="icon icon-pinterest"></i></a></li>
                      <li><a href="#"><i class="icon icon-twitter-1"></i></a></li>
                      <li><a href="#"><i class="icon icon-linkedin-1"></i></a></li>
                    </ul>
                  </div>
                </div>
                <div class="blog-related">
                  <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12 section-block section-block-no-margin">
                      <div class="block-blog-post-1 text-center">
                        <div class="__image mb-25"><a href="#">
                            <div class="overlay-container"><img src="assets/images/blog/blog-5-s.jpg" alt="Blog Post Image"/>
                              <div class="overlay-hover bgc-dark-o-4"></div>
                            </div></a></div>
                        <div class="__content">
                          <div class="__title"><a href="#" class="font-heading fz-6 mb-5">PLEASUARE WITHOUT CONSCIENCE</a></div>
                          <p class="font-serif-italic color-gray mb-0"><a href="#">May 15, 2015</a>&nbsp;/&nbsp;<a href="#">admin</a>&nbsp;/&nbsp;<a href="#">Co-working</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12 section-block section-block-no-margin">
                      <div class="block-blog-post-1 text-center">
                        <div class="__image mb-25"><a href="#">
                            <div class="overlay-container"><img src="assets/images/blog/blog-7-s.jpg" alt="Blog Post Image"/>
                              <div class="overlay-hover bgc-dark-o-4"></div>
                            </div></a></div>
                        <div class="__content">
                          <div class="__title"><a href="#" class="font-heading fz-6 mb-5">PLEASUARE WITHOUT CONSCIENCE</a></div>
                          <p class="font-serif-italic color-gray mb-0"><a href="#">May 15, 2015</a>&nbsp;/&nbsp;<a href="#">admin</a>&nbsp;/&nbsp;<a href="#">Co-working</a></p>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-4 col-xs-12 section-block col-sm-offset-3 col-sm-6 col-md-offset-0 section-block-no-margin">
                      <div class="block-blog-post-1 text-center">
                        <div class="__image mb-25"><a href="#">
                            <div class="overlay-container"><img src="assets/images/blog/blog-6-s.jpg" alt="Blog Post Image"/>
                              <div class="overlay-hover bgc-dark-o-4"></div>
                            </div></a></div>
                        <div class="__content">
                          <div class="__title"><a href="#" class="font-heading fz-6 mb-5">PLEASUARE WITHOUT CONSCIENCE</a></div>
                          <p class="font-serif-italic color-gray mb-0"><a href="#">May 15, 2015</a>&nbsp;/&nbsp;<a href="#">admin</a>&nbsp;/&nbsp;<a href="#">Co-working</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="post-comment">
                  <h4 class="smb block-heading bgc-gray-lighter">COMMENT(5)</h4>
                  <div class="comment">
                    <div class="__avatar"><img src="assets/images/team/team-member-4.jpg" alt="avatar" class="img-responsive"/></div>
                    <div class="__content-wrapper">
                      <div class="__name">JOHN DOE</div>
                      <div class="__date">Oct 23, 2015</div>
                      <div class="__content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</div>
                      <div class="__option"><span>Like : 15</span><span><a href="#" class="color-primary">Reply</a></span></div>
                      <div class="comment">
                        <div class="__avatar"><img src="assets/images/team/team-member-1.jpg" alt="avatar" class="img-responsive"/></div>
                        <div class="__content-wrapper">
                          <div class="__name">JOHN DOE</div>
                          <div class="__date">Oct 23, 2015</div>
                          <div class="__content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</div>
                          <div class="__option"><span>Like : 15</span><span><a href="#" class="color-primary">Reply</a></span></div>
                        </div>
                      </div>
                      <div class="comment">
                        <div class="__avatar"><img src="assets/images/team/team-member-3.jpg" alt="avatar" class="img-responsive"/></div>
                        <div class="__content-wrapper">
                          <div class="__name">JANE DOE</div>
                          <div class="__date">Oct 23, 2015</div>
                          <div class="__content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</div>
                          <div class="__option"><span>Like : 15</span><span><a href="#" class="color-primary">Reply</a></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="comment">
                    <div class="__avatar"><img src="assets/images/team/team-member-4.jpg" alt="avatar" class="img-responsive"/></div>
                    <div class="__content-wrapper">
                      <div class="__name">JOHN DOE</div>
                      <div class="__date">Oct 23, 2015</div>
                      <div class="__content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</div>
                      <div class="__option"><span>Like : 15</span><span><a href="#" class="color-primary">Reply</a></span></div>
                      <div class="comment">
                        <div class="__avatar"><img src="assets/images/team/team-member-2.jpg" alt="avatar" class="img-responsive"/></div>
                        <div class="__content-wrapper">
                          <div class="__name">JANE DOE</div>
                          <div class="__date">Oct 23, 2015</div>
                          <div class="__content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</div>
                          <div class="__option"><span>Like : 15</span><span><a href="#" class="color-primary">Reply</a></span></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <form class="form-comment">
                  <h6 class="__title">LEAVE A COMMENT</h6>
                  <div class="row">
                    <div class="col-md-6">
                      <input type="text" name="name" placeholder="Name" required="required"/>
                    </div>
                    <div class="col-md-6">
                      <input type="text" name="phone" placeholder="Phone"/>
                    </div>
                    <div class="col-md-12">
                      <input type="email" name="email" placeholder="Email" required="required"/>
                      <textarea name="message" placeholder="Message" required="required"></textarea>
                    </div>
                    <div class="col-md-12 text-center-md-max">
                      <button type="submit" class="btn btn-size-2 btn-primary">POST COMMENT</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
      </div>
      <!--End Page Body-->
