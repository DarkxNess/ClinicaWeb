
<form class="form-horizontal">
            <fieldset>

            <!-- Form Name -->
            <legend>Ficha médica</legend>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="contactoEmergencia">Contacto alternativo</label>  
              <div class="col-md-5">
              <input id="contactoEmergencia" name="contactoEmergencia" placeholder="" class="form-control input-md" required="" type="text">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telefonosContacto">Tel(s) contacto</label>  
              <div class="col-md-5">
              <input id="telefonosContacto" name="telefonosContacto" placeholder="" class="form-control input-md" required="" type="text">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="medicoParticular">Médico particular</label>  
              <div class="col-md-5">
              <input id="medicoParticular" name="medicoParticular" placeholder="" class="form-control input-md" type="text">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="telefonosMedico">Tel(s) médico</label>  
              <div class="col-md-5">
              <input id="telefonosMedico" name="telefonosMedico" placeholder="" class="form-control input-md" type="text">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="clinica">Clínica</label>  
              <div class="col-md-5">
              <input id="clinica" name="clinica" placeholder="" class="form-control input-md" type="text">

              </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
              <label class="col-md-4 control-label" for="fechaChequeo">Ultimo chequeo</label>  
              <div class="col-md-4">
              <input id="fechaChequeo" name="fechaChequeo" placeholder="" class="form-control input-md" type="text">
              <span class="help-block">(dd-mm-aaaa)</span>  
              </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="tipoSangre">Tipo sanguíneo</label>
              <div class="col-md-2">
                <select id="tipoSangre" name="tipoSangre" class="form-control">
                  <option value="-">(!)</option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                </select>
              </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="medicamentos">Medicamentos con/sin receta</label>
              <div class="col-md-4">                     
                <textarea class="form-control" id="medicamentos" name="medicamentos"></textarea>
              </div>
            </div>

            <!-- Multiple Checkboxes (inline) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="vacunas">Vacunas</label>
              <div class="col-md-4">
                <label class="checkbox-inline" for="vacunas-0">
                  <input name="vacunas" id="vacunas-0" value="1" type="checkbox">
                  BGC
                </label>
                <label class="checkbox-inline" for="vacunas-1">
                  <input name="vacunas" id="vacunas-1" value="1" type="checkbox">
                  HB
                </label>
                <label class="checkbox-inline" for="vacunas-2">
                  <input name="vacunas" id="vacunas-2" value="1" type="checkbox">
                  Polio
                </label>
                <label class="checkbox-inline" for="vacunas-3">
                  <input name="vacunas" id="vacunas-3" value="1" type="checkbox">
                  Penta
                </label>
                <label class="checkbox-inline" for="vacunas-4">
                  <input name="vacunas" id="vacunas-4" value="1" type="checkbox">
                  SRP
                </label>
                <label class="checkbox-inline" for="vacunas-5">
                  <input name="vacunas" id="vacunas-5" value="1" type="checkbox">
                  DPT
                </label>
                <label class="checkbox-inline" for="vacunas-6">
                  <input name="vacunas" id="vacunas-6" value="1" type="checkbox">
                  Flu
                </label>
              </div>
            </div>

            <!-- Multiple Checkboxes -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="condiciones">Marque si aplica. Por favor explique en comentarios, abajo</label>
              <div class="col-md-4">
              <div class="checkbox">
                <label for="condiciones-0">
                  <input name="condiciones" id="condiciones-0" value="1" type="checkbox">
                  Está bajo cuidado médico
                </label>
                    </div>
              <div class="checkbox">
                <label for="condiciones-1">
                  <input name="condiciones" id="condiciones-1" value="1" type="checkbox">
                  Sufre alguna enfermedad crónica
                </label>
                    </div>
              <div class="checkbox">
                <label for="condiciones-2">
                  <input name="condiciones" id="condiciones-2" value="1" type="checkbox">
                  Sufre resfriados frecuentemente
                </label>
                    </div>
              <div class="checkbox">
                <label for="condiciones-3">
                  <input name="condiciones" id="condiciones-3" value="1" type="checkbox">
                  Frecuentes dolores de cabeza, espalda, piernas, etc.
                </label>
                    </div>
              <div class="checkbox">
                <label for="condiciones-4">
                  <input name="condiciones" id="condiciones-4" value="1" type="checkbox">
                  Antecedentes familiares de enfermedades
                </label>
                    </div>
              <div class="checkbox">
                <label for="condiciones-5">
                  <input name="condiciones" id="condiciones-5" value="1" type="checkbox">
                  Actividad física limitada
                </label>
                    </div>
              <div class="checkbox">
                <label for="condiciones-6">
                  <input name="condiciones" id="condiciones-6" value="1" type="checkbox">
                  Ha estado fuera del colegio por enfermedad o accidente
                </label>
                    </div>
              <div class="checkbox">
                <label for="condiciones-7">
                  <input name="condiciones" id="condiciones-7" value="1" type="checkbox">
                  Alérgico a algún medicamento, comida u otros
                </label>
                    </div>
              <div class="checkbox">
                <label for="condiciones-8">
                  <input name="condiciones" id="condiciones-8" value="1" type="checkbox">
                  Usa lentes
                </label>
                    </div>
              </div>
            </div>

            <!-- Textarea -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="comentario_medico">Comentarios</label>
              <div class="col-md-4">                     
                <textarea class="form-control" id="comentario_medico" name="comentario_medico"></textarea>
              </div>
            </div>

            <!-- Button (Double) -->
            <div class="form-group">
              <label class="col-md-4 control-label" for="btnGuardar"></label>
              <div class="col-md-8">
                <button id="btnGuardar" name="btnGuardar" class="btn btn-success">Guardar</button>
                <button id="btnCancelar" name="btnCancelar" class="btn btn-warning">Cancelar</button>
              </div>
            </div>

            </fieldset>
        </form>

         <?php require 'partials/footer.php' ?>
