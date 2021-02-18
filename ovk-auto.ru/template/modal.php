<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Запись на сервис</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group">
                        <input type="text" class="form-control" name="name_one" aria-describedby="nameHelp"
                            placeholder="Ваше имя">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="tele" placeholder="Ваш телефон в формае 900 000 00 00">
                    </div>
                    <div class="form-group">
                        <input type="date" class="form-control" name="date_one" placeholder="Выберете желаемую дату"
                            aria-describedby="dateHelp">
                        <small id="dateHelp" class="dateHelp">
                            Выберете желаемую дату
                        </small>
                    </div>
                    <div class="form-check">
                        <input type="checkbox" class="form-check-input" name="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ознакомлен с политикой КД</label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-form">Записаться</button>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>