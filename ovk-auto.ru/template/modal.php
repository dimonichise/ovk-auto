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
            <form  class="form-contact contact_form" action="contact_process.php" method="post"
                     id="contactForm" novalidate="novalidate">
                     <div class="row">
                        
                         <div class="col-sm-12">
                             <div class="form-group">
                                 <input class="form-control valid" name="name" id="name" type="text"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ваше имя'"
                                     placeholder="Ваше имя">
                             </div>
                         </div>
                         <div class="col-sm-12">
                             <div class="form-group">
                                 <input class="form-control valid" name="number" id="number" type="tel"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Телефон'"
                                     placeholder="Телефон">
                             </div>
                         </div>
                         <div class="col-sm-12">
                             <div class="form-group">
                                 <input class="form-control" name="data" id="data" type="date"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Выберете дату'"
                                     placeholder="Выберете дату">
                             </div>
                         </div>
                            <div class="col-sm-12">
								<div class="form-group">
									<select class="form-control" name="time" id="time" type="text"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Выберете время'"
                                     placeholder="Время">
									<option value="8:00">8:00</option>
									<option value="8:30">8:30</option>
									<option value="9:00">9:00</option>
									<option value="9:30">9:30</option>
									<option value="10:00">10:00</option>
                                    <option value="10:30">10:30</option>
                                    <option value="11:00">11:00</option>
                                    <option value="11:30">11:30</option>
                                    <option value="12:00">12:00</option>
                                    <option value="12:30">12:30</option>
                                    <option value="13:00">13:00</option>
                                    <option value="13:30">13:30</option>
                                    <option value="14:00">14:00</option>
                                    <option value="14:30">14:30</option>
                                    <option value="15:30">15:30</option>
                                    <option value="16:00">16:00</option>
                                    <option value="16:30">16:30</option>
                                    

									</select>
								</div>
							</div>
                            <div class="col-12">
                             <div class="form-group">
                                 <textarea class="form-control w-100" name="message" id="message" cols="30" rows="3"
                                     onfocus="this.placeholder = ''" onblur="this.placeholder = 'Наименование работ'"
                                     placeholder=" Наименование работ"></textarea>
                             </div>
                         </div>
                         </div>
                     </div>
                     <div class="form-group mt-3">
                         <button type="submit" class="button button-contactForm boxed-btn submit-btn">Записаться</button>
                     </div>
                 </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>