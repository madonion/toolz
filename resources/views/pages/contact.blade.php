
@extends('layouts.master')

@section('title', 'Magazin online de scule si unelte profesionale')


@section('inner')
    <div class="col-md-9 pzero mainbox" itemscope="" itemtype="http://schema.org/Product">
        <section id="main" class="">
            <header>
                @include('layouts.partials._breadcrumbs')
            </header>

            <form name="contact_us" action="http://www.toolszone.ro/contact_us.php?action=send" method="post">



                <div class="well well-sm quick-contact">
                    <div class="row" itemscope="" itemtype="http://schema.org/LocalBusiness">
                        <div class="col-md-12">
                            <div class="col-md-6 contact-email">
                                <ul>
                                    <li><span itemprop="name">S.C. VIRTUAL TOOLS S.R.L.</span></li>
                                    <li><span itemprop="description">Magazin online de scule profesionale</span></li>
                                    <li>C.I.F. <span itemprop="taxID">RO25866810</span></li>
                                    <li>J08/1193/07.08.2009</li>

                                    <li><div itemprop="address" itemscope="" itemtype="http://schema.org/PostalAddress">
                                            Adresa:
                                            <ul>
                                                <li><span itemprop="streetAddress">B-dul 15 Noiembrie, Nr. 80, Bl. C 24, Ap. 1</span></li>
                                                <li><span itemprop="postalCode">Cod postal:	500102</span></li>
                                                <li><span itemprop="addressLocality">Brasov</span></li>
                                            </ul>
                                        </div>
                                    </li>

                                </ul>


                            </div>
                            <div class="col-md-6">
                                <div class="row contact row-first">
                                    <div class="col-md-6">
                                        <a href="skype:tools.zone" target="_blank" class="b1"><i class="fa fa-skype"></i>Skype</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="https://plus.google.com/+ToolsZonero/" class="b2"><i class="fa fa-google-plus"></i>Google+</a>
                                    </div>
                                </div>
                                <div class="row contact">
                                    <div class="col-md-6">
                                        <a href="https://www.linkedin.com/pub/toolszone-ro-online-shop" class="b3"><i class="fa fa-linkedin"></i>LinkedIn</a>
                                    </div>
                                    <div class="col-md-6">
                                        <a href="https://twitter.com/toolszone" class="b4"><i class="fa fa-twitter"></i>Twitter</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12 contact-phone">
                                <ul>
                                    <li><span>Telefon:</span><span itemprop="telephone">+4 0368 004 674</span> (Romtelecom) | <span itemprop="telephone">+4 0748 106 900</span> (Orange)</li>
                                    <li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span itemprop="telephone">+4 0727 387 799</span> (Vodafone) &nbsp;&nbsp;&nbsp;&nbsp;| Fax: <span itemprop="faxNumber">+4 0368 004 674</span></li>
                                    <li>Email: <span class="email-addr" itemprop="email"><script type="text/javascript">
                                                            <!--
                                                            document.write("<a href='mailto:&#111;&#102;&#102;&#105;&#99;&#101;&#64;&#116;&#111;&#111;&#108;&#115;&#122;&#111;&#110;&#101;&#46;&#114;&#111;'> office@toolszone.ro</a>")
                                                            // -->
                                                        </script><a href="mailto:office@toolszone.ro"> office@toolszone.ro</a></span></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div id="ptInformatii">Pentru informatii, sugestii sau cereri de oferta va stam la dispozitie 24/7.</div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" autocomplete="off" id="Name" placeholder="Numele:">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" autocomplete="off" id="email" placeholder="E-mail">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <textarea class="form-control textarea" rows="5" name="enquiry" id="enquiry" placeholder="Mesaj:"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <button id="contact-submit" type="submit" class="btn btn-primary input-medium pull-right">Trimite</button>
                    </div>
                </div>

            </form>
            </section>
    </div>



@endsection