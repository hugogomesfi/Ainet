<!-- Contacts -->
 <div id="contacts">
   <div class="row">	
     <!-- Alignment -->
	<div class="col-sm-offset-3 col-sm-6">
	   <!-- Form itself -->
      <form method="POST" class="well" id="contactForm" name="ContacteNos" action="<?php echo site_url('ContacteNos/recebeDadosMail');?>" novalidate>
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
			   	            id="email" required name="email"
			   		   data-validation-required-message="Please enter your email" 
                        value="<?php echo set_value('email'); ?>"/>
                        </p>
		</div>
	    </div> 	

               <div class="control-group">
                  
                 <div class="controls">
                      <p>
				 <textarea rows="10" cols="100" class="form-control" placeholder="Message" id="message" 
                                           required name="text" data-validation-required-message="Please enter your message" 
                                           maxlength="999" style="resize:none" ><?php echo set_value('text'); ?></textarea>
                       </p>

		</div>
               </div> 		 
	     <div id="success"> </div> <!-- For success/fail messages -->
             <label>Motivo relacionado com:</label>
             <select id="especialidade"  class="caixaTexto">
                 <option value="motive" <?php echo set_select('motive'); ?> >Creche</option>
                 <option value="motive" <?php echo set_select('motive'); ?>>Irmandade</option>
                 <option value="motive" <?php echo set_select('motive'); ?>>Saude</option>
                 <option value="motive" <?php echo set_select('motive'); ?>>Lar</option>
                 <option value="motive" <?php echo set_select('motive'); ?>>Residencial</option>
                 <option value="motive" <?php echo set_select('motive'); ?>>Corpo Clinico</option>
                 <option value="motive" <?php echo set_select('motive'); ?>>Outros</option>
             </select>
	    <button type="submit" class="btn btn-primary pull-right">Send</button><br />
          </form>
	</div>
      </div>
    </div>