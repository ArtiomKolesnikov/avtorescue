    <? if($device == 'desktop'){ ?>
        <div class="row ">
            <div class="col text-center">
                <p class="slogon">
                    <span class="text-white">частные</span>
                    <span class="text-white">эвакуаторы</span>
                    <span class="text-white">москвы</span>
                    <span class="text-white">и подмосковья</span>
                </p>
                <p class="text-white">Спешат на помощь</p>
            </div>
        </div>
    <? } ?>

<div id="content">
    <div class="main_page_img_wrapper">

        <div class="inner_wrapper">
            <? if($device == 'desktop'){ ?>
                <img src="/images/evoc_lom_plat.jpg" class="image img-responsive img-thumbnail img_type_evoc top_margin left_margin" alt="">
                <img src="/images/evoc_lom_plat.jpg" class="image img-responsive img-thumbnail img_type_evoc top_margin right_margin" alt="">
                <img src="/images/evoc_lom_plat.jpg" class="image img-responsive img-thumbnail img_type_evoc bottom_margin left_margin" alt="">
                <img src="/images/evoc_lom_plat.jpg" class="image img-responsive img-thumbnail img_type_evoc bottom_margin right_margin" alt="">
            <? } ?>
            <img src="/images/main_page_img_2.jpg" class="image img-responsive img-thumbnail main_image" alt="">
        </div>
    </div>
    <p class="text-white">Самые низкие договорные цены</p>
    <p class="min_price">от <span class="text-danger">700</span> рублей</p>

    <a href="<?= $device == 'mobile' ? "tel:89777777":"#" ?>" <?= $device == 'mobile' ?: "data-toggle=\"modal\" data-target=\"#exampleModal\""  ?> class="btn btn-primary btn_call text-center text-uppercase"><span>вызвать</span> <span>эвакуатор</span></a>

</div>

<!--  Модальное окно-форма  -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Заполните форму</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="phone" placeholder="номер телефона">
                    </div>
                    <div class="form-group">

                        <input type="text" class="form-control" name="name" placeholder="имя">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">закрыть</button>
                <button type="button" class="btn btn-primary">заказать</button>
            </div>
        </div>
    </div>
</div>



<!--**********************************************************************-->

<!--<div class="container content">-->
<!--    <div class="row ">-->
<!--        <div class="col text-center">-->
<!--            <p class="slogon">-->
<!--                <span class="text-white">частные</span>-->
<!--                <span class="text-primary">эвакуаторы</span>-->
<!--                <span class="text-danger">москвы</span>-->
<!--            </p>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row">-->
<!--        <div class="col text-center">-->
<!--            <a href="/" class="">-->
<!--                <img src="/images/btn_call_2.jpg" width="200" />-->
<!--            </a>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="row min_price_block text-center">-->
<!--        <div class="col">-->
<!--            <p>от <span class="min_price">700</span> рублей</p>-->
<!--        </div>-->
<!--    </div>-->

    <!--    <ul class="">-->
    <!--        <li>С ломанной платформой</li>-->
    <!--        <li>Со сдвижной платформой</li>-->
    <!--        <li>Манипулятор</li>-->
    <!--        <li>С частичной погрузкой</li>-->
    <!--    </ul>-->

    <!--    <div class="row">-->
    <!--        <div class="col-12">-->
    <!--            <div class="col">-->
    <!--                <p class="text-center">Все виды эвакуаторов:</p>-->
    <!--            </div>-->
    <!--        </div>-->
    <!---->
    <!--        <div class="col-12">-->
    <!--            <div class="col ">-->
    <!--                <div class="row">-->
    <!--                    <div class="col"><img src="/images/evoc_lom_plat.jpg" class="img-thumbnail img-responsive" alt=""></div>-->
    <!--                    <div class="col">2</div>-->
    <!--                </div>-->
    <!--                <div class="row">-->
    <!--                    <div class="col">3</div>-->
    <!--                    <div class="col">4</div>-->
    <!--                </div>-->
    <!--            </div>-->
    <!--        </div>-->
    <!--    </div>-->
    <!---->
    <!---->
    <!--    <div class="row">-->
    <!--        <div class="col">-->
    <!--            <span>Ежедневно на линии более 50-ти эвакуаторов</span>-->
    <!--            <span>Мы всегда ближе, дешевле, быстрее</span>-->
    <!--        </div>-->
    <!--    </div>-->




<!--</div>-->