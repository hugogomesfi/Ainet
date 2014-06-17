<!-- Contacts -->
 <div id="contacts">
   <div class="row">	
     <!-- Alignment -->
	<div class="col-sm-offset-3 col-sm-6">
	   <!-- Form itself -->
      <form method="POST" class="well" id="contactForm" name="ContacteNos" action="<?php echo site_url('ContacteNos/sendMail');?>" novalidate>
              <blockquote>Contacte-nos</blockquote>
              

		 <div class="control-group">
                    <div class="controls">
			<input type="text" class="form-control" name="fullName"
			   	   placeholder="Full Name" id="name" required
			           data-validation-required-message="Please enter your name" 
                                       value="<?php echo set_value('fullName'); ?>"/>
			  <p class="help-block"></p>
		   </div>
	         </div> 	
                <div class="control-group">
                  <div class="controls">
                       <p>
			<input type="email" class="form-control" placeholder="Email" 
			   	            id="email" required name="mail"
			   		   data-validation-required-message="Please enter your email" 
                        value="<?php echo set_value('mail'); ?>"/>
                        </p>
		</div>
	    </div> 	

               <div class="control-group">
                  
                 <div class="controls">
                      <p>
				 <textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message" 
                                           required name="text" data-validation-required-message="Please enter your message" 
                                           maxlength="999" style="resize:none" > <?php echo set_value('text'); ?> </textarea>
                       </p>

		</div>
               </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
             <label>Motivo relacionado com:</label>
             <select name="motive" id="especialidade"  class="caixaTexto">
                 <option  value="creche" <?php echo set_select('motive','creche'); ?> >Creche</option>
                 <option value="irmandade" <?php echo set_select('motive','irmandade'); ?> >Irmandade</option>
                 <option value="irmandade" <?php echo set_select('motive','saude'); ?> >Saude</option>
                 <option value="irmandade" <?php echo set_select('motive','lar'); ?> >Lar</option>
                 <option value="irmandade" <?php echo set_select('motive','residencial'); ?> >Residencial</option>
                 <option value="irmandade" <?php echo set_select('motive','corpoclinico'); ?> >Corpo Clinico</option>
                 <option value="irmandade" <?php echo set_select('motive','outros'); ?> >Outros</option>
             </select>
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
	</div>
      </div>
    </div>