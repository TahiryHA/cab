
    <h3>Calculer la répartition entre les femmes et les hommes</h3>
    <div class="form-group">
        <label for="total">Nombre total des élèves</label>
        <input type="number" class="form-control" ng-model="total" name="total" placeholder="" required> 
    </div>
    <div class="form-group">
        <label for="man">Nombre de masculin</label>
        <input type="number" class="form-control" ng-model="man" name="man" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="woman">Nombre de féminin</label>
        <input type="number" class="form-control" value="{{woman()}}" name="woman" placeholder="" required>
    </div>


    <div class="well" ng-hide="total.$touched">
    <p>Masculin : {{ resultMan() }} %</p>
    <p>Féminin : {{ resultWoman()}} %</p>
    </div>
