
      <div class="row align-items-left d-print-none">
        <div class="col-sm-3">
          <input type="email" class="form-control mb-3" id="email" placeholder="mon@email.com">
        </div>
        <div class="col-sm-3">
          <span id="noSize" display="none">Taille unique</span>
          <select id="size" class="form-select mb-3">
            <script>
              document.addEventListener('DOMContentLoaded', function() {
                var sizeValues = document.querySelectorAll('#size-chart tbody tr th')
                var selector = document.getElementById('size');
                var noSize = document.getElementById('noSize');
                for (let size of sizeValues) { 
                  var option = document.createElement("option");
                  option.value = option.text = 'Taille '+size.innerText
                  selector.append(option);
                }
                var sizes = document.getElementById('size-chart');
                selector.hidden = (sizes === null);
                noSize.hidden = !selector.hidden;
              });
            </script>
          </select>
        </div>
        <div class="col-sm-6">
          <button type="button" class="btn btn-success mb-3" 
          onclick="location.href='mailto:contact@bagaddenantes.bzh?subject=Commande%20en%20ligne%20Boutique%20du%20Bagad%20de%20Nantes&body=Merci%20de%20commander%20cet%20article%20:%20'+document.getElementsByTagName('h2')[0].innerText+'%20'+ document.getElementById('size').value+'%0A%0A'+document.URL+'%0A%0AMon%20nom%20complet%20:%0A%0AMon%20numéro%20de%20portable%20:%0A%0AMon%20e-mail%20:%20'+document.getElementById('email').value")
          >Commander via e-mail</button>
        </div>
      </div>
      <p>Prix TTC, livraison incluse</p>