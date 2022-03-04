<?php $bgColor = get_sub_field('bg_colour');
$noMobile = get_sub_field('hide_on_mobile');?>

<section
    class="timeline-slider <?php if($bgColor == true): echo 'alt-bg'; endif; ?> <?php the_sub_field('margin_size'); ?> <?php if($noMobile == true): echo 'no-mob'; endif; ?>"
    <?php if( get_sub_field('section_id') ): ?>id="<?php the_sub_field('section_id'); ?>" <?php endif; ?>>
    <div class="row <?php the_sub_field('column_size'); ?>">
        <div class="clearfix desktop-carousel desktop-owl timeline owl-carousel owl-theme">
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <!--insert img here if you need to insert an image in your timeline. insert same place in each slide.-->
                <!-- <div class="timeline-image"><img src='/assets/1538492601-15290918971874Granite.jpg' alt=''
                    width='170' height='124' class='first last' /></div> -->
                <div class="timeline-copy">
                    <h3>1946</h3>
                    <p>Founder Alexander Frontera obtained a charter for Maspeth Federal Savings &amp; Loan
                        Association. He also founded the Maspeth Kiwanis Club &amp; Maspeth Chamber of
                        Commerce, where many employees are still involved to this day.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1947</h3>
                    <p>Maspeth Federal Savings opens their door for the first time on January 2<sup>nd.</sup></p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1953</h3>
                    <p>As a growing organization, this small branch style wasnt cutting it and the Bank had
                        to expand.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1968</h3>
                    <p>Our first branch opens in Rego Park.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1968</h3>
                    <p>Free summer concert series begins becoming a tradition that has lasted for over 50
                        years.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1974</h3>
                    <p>Our second branch opens in Forest Hills.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1975</h3>
                    <p>Maspeth hosts their first Memorial Day Parade honoring member of the military. This
                        has become an annual tradition.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1976</h3>
                    <p>All in the family: Alexanders son, Franklin Frontera, is elected Chairman of the
                        Board.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1976</h3>
                    <p>Our third branch opens in Fresh Meadows</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1978</h3>
                    <p>Grand Opening of the Main Office drive-thru.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1978</h3>
                    <p>Raymond Smith is elected president.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1981</h3>
                    <p>Our first location in Nassau County opens in New Hyde Park.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1987</h3>
                    <p>MFS celebrates its 40<sup>th</sup> Anniversary.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1987</h3>
                    <p>The Loan Center hosts its Grand Opening.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1997</h3>
                    <p>Employees celebrate the 50<sup>th</sup> Anniversary of MFS</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1998</h3>
                    <p>Employees celebrate the 50<sup>th</sup> Anniversary of MFS</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>1998</h3>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>2002</h3>
                    <p>MFS embraces their history with a mural for the 350<sup>th</sup> Anniversary of
                        Maspeth.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>2002</h3>
                    <p>MFS sponsors the first World Trade Center Memorial Ceremony and erects a monument to
                        honor the firemen and Maspeth residents who lost their lives on 9-11.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>2005</h3>
                    <p>Loan Center expands and hosts its Grand Re-Opening</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>2008</h3>
                    <p>First Smile on Maspeth Day free carnival held in the Main Office parking lot that
                        offers rides, entertainment and more. To this day this had become an annual
                        tradition for many families in the community.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>2010</h3>
                    <p>Main Office Grand Re-Opening</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>2011</h3>
                    <p>Forest Hills Grand Re-Opening</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>2013</h3>
                    <p>First Earth Day event which provides free services such as electronic recycling and
                        paper shredding to the community.</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>2014</h3>
                    <p>Employees join to volunteer with Habitat for Humanity</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>2016</h3>
                    <p>Thomas Rudzewick is elected President &amp; CEO</p>
                </div>
            </div>
            <div class="timeline-slide">
                <div class="circle"></div>
                <div class="vertical-line"></div>
                <div class="timeline-copy">
                    <h3>2017</h3>
                    <p>MFS hosts a celebration of the 375<sup>th</sup> Anniversary of Maspeth.</p>
                </div>
            </div>
        </div>
    </div>
</section>