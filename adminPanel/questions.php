
<!-- questions table -->

<table class="questionTable centered highlight">
        <thead>
          <tr>
              <th data-field="id">No.</th>
              <th data-field="question">Question</th>
              <th data-field="questionPic">Question Pic</th>
              <th data-field="variant">A)</th>
              <th data-field="variant">B)</th>
              <th data-field="variant">C)</th>
              <th data-field="variant">D)</th>
              <th data-field="variant">E)</th>
              <th data-field="rightAnswer">Right Answer</th>

          </tr>
        </thead>

        <tbody>
          <tr>
            <td class="questionId"><input type="text" name="questionId" value="1"></td>
            <td><input type="text" name="name" value="M=8 , N=6 olarsa aşağıdakı alqoritmin nəticəsi nə olar?"></td>

<!-- file uploading -->

            <td class="uploadQuestionPicture" >
            <form action="#">
               <div class="file-field input-field">
                 <div class="btn">
                   <i class="material-icons">present_to_all</i>
                   <input type="file">
                 </div>
                 <div class="file-path-wrapper">
                   <input class="file-path validate" type="text">
                 </div>
               </div>
              </form>
            </td>

<!-- file uploading -->


            <td><input type="text" name="name" value="2"> </td>
            <td><input type="text" name="name" value="15"></td>
            <td><input type="text" name="name" value="64"></td>
            <td><input type="text" name="name" value="48"></td>
            <td><input type="text" name="name" value="68"></td>
            <td><input type="text" name="name" value="68"></td>

          </tr>
          <tr>
            <td class="questionId"><input type="text" name="questionId" value="2"></td>
            <td><input type="text" name="name" value="Arifin yaşı qardaşının yaşından 3 dəfə çoxdur.5 il sonra isə onun yaşı qardaşının yaşından iki dəfə çox olacaqdır.Arifin və qardaşının hazırda ikisinin birgə neçə yaşı var?"></td>
            <td class="uploadQuestionPicture" >
            <form action="#">
               <div class="file-field input-field">
                 <div class="btn">
                   <i class="material-icons">present_to_all</i>
                   <input type="file">
                 </div>
                 <div class="file-path-wrapper">
                   <input class="file-path validate" type="text">
                 </div>
               </div>
              </form>
            </td>
            <td><input type="text" name="name" value="12"></td>
            <td><input type="text" name="name" value="16"></td>
            <td><input type="text" name="name" value="30"></td>
            <td><input type="text" name="name" value="36"></td>
            <td><input type="text" name="name" value="20"></td>
            <td><input type="text" name="name" value="68"></td>

          </tr>
          <tr>
            <td class="questionId" ><input type="text" name="questionId" value="3"></td>
            <td><input type="text" name="name" value="Hansı tam alqoritmdir?"></td>
            <td class="uploadQuestionPicture" >
            <form action="#">
               <div class="file-field input-field">
                 <div class="btn">
                   <i class="material-icons">present_to_all</i>
                   <input type="file">
                 </div>
                 <div class="file-path-wrapper">
                   <input class="file-path validate" type="text">
                 </div>
               </div>
              </form>
            </td>
            <td><input type="text" name="name" value="Şagird siyahısı"></td>
            <td><input type="text" name="name" value="Mağazada anbardakı mallar haqda məlumat"></td>
            <td><input type="text" name="name" value="Keçiləcək dərslərin siyahısı"></td>
            <td><input type="text" name="name" value="Təhlükəsizlik texnikası kitabçası"></td>
            <td><input type="text" name="name" value="Bankomatdan pulu çıxarma qaydası"></td>
            <td><input type="text" name="name" value="68"></td>

          </tr>
        </tbody>
      </table>

  <!-- questions table -->



<!-- pagination not working now -->

      <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active"><a href="#!">1</a></li>
        <li class="waves-effect"><a href="#!">2</a></li>
        <li class="waves-effect"><a href="#!">3</a></li>
        <li class="waves-effect"><a href="#!">4</a></li>
        <li class="waves-effect"><a href="#!">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      </ul>

      <!-- pagination not working now -->



      <!-- Modal Trigger -->
  <a style="position:absolute; bottom: 45px; right: 24px;" data-target="addQuestion" class="modal-trigger btn-floating btn-large waves-effect waves-light red"><i class="material-icons">add</i></a>
       <!-- Modal Structure -->

       <div id="addQuestion" class="modal">
         <div class="modal-content">
           <h4>Add Question</h4>

           <form action="#">

           <div class="row">
                <div style="position:relative" class="col s12 m12">

                  <!-- question point -->

                <a class="questionPoint hide-on-small-only btn-floating btn-large waves-effect waves-light red">
                  <input style="text-align:center; border:none !important; box-shadow:none !important;" maxlength="1" pattern="^[0-9]*$" type="text" name="name" value="" placeholder="point">
                </a>

                <!-- question point end -->


                  <div class="" id="1">

                    <div class="card-image">
                      <div class="file-field input-field">
                        <div class="btn">
                          <i class="material-icons">present_to_all</i>
                          <input type="file">
                        </div>
                        <div class="file-path-wrapper">
                          <input class="file-path validate" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="card-content">
                      <input type="text" name="name" value="" placeholder="Write question here">
                    </div>

                    <div class="card-action">


                      <p>
                        <input name="1" id="test1" value="A" type="radio">
                        <label for="test1">A)</label>
                        <input type="text" name="name" value="">
                      </p>


                      <p>
                        <input name="1" id="test2" value="B" type="radio">
                        <label for="test2">B)</label>
                        <input type="text" name="name" value="">
                      </p>


                      <p>
                        <input name="1" id="test3" value="C" type="radio">
                        <label for="test3">C)</label>
                        <input type="text" name="name" value="">
                      </p>


                      <p>
                        <input name="1" id="test4" value="D" type="radio">
                        <label for="test4">D)</label>
                        <input type="text" name="name" value="">
                      </p>


                      <p>
                        <input style="display:inline-block;" name="1" id="test5" value="E" type="radio">
                        <label style="display:inline-block;" for="test5">E)</label>
                        <input type="text" name="name" value="">
                      </p>


                    </div>
                  </form>

                  </div>
                </div>
              </div>


         </div>

         <div class="modal-footer">
           <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Əlavə et</a>
         </div>
       </div>



<script type="text/javascript">

$(document).ready(function(){
   // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
   $('.modal-trigger').leanModal();
 });

</script>
