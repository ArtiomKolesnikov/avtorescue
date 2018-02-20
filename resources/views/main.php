<div id="content">
    <div class="main_page_img_wrapper">
        <img src="/images/main_page_img.jpg" class="image img-responsive img-thumbnail" alt="">
    </div>
    <p class="min_price">от <span class="text-danger">700</span> рублей</p>

    <a href="<?= $device == 'mobile' ? "tel:89777777":"#" ?>" <?= $device == 'mobile' ?: "data-toggle=\"modal\" data-target=\"#exampleModal\""  ?> class="btn btn-primary btn_call text-center text-uppercase"><span>вызвать</span> <span>эвакуатор</span></a>
</div>

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