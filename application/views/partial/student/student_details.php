<div class="col-md-12 nopadding">
    <div class="page-header">
        <h1>{{ title }}</h1>
    </div>
</div>

<form name="myForm" id="myForm">

    <div class="form-group" ng-hide='student.id' ng-class="{error: myForm.sexe.$invalid}">
        <label class="control-label" for="sexe">Sexe</label>


        <select name="sexe" class="form-control" ng-model="student.sexe">
            <option value="" disabled selected>Sexe</option>
            <option value="Homme">Homme</option>
            <option value="Femme">Femme</option>

        </select>
        <span ng-show="myForm.sexe.$error.required" class="help-inline">Required</span>

    </div>

    <div class="form-group" ng-hide='student.id' ng-class="{error: myForm.nie.$invalid}">
        <label class="control-label" for="nie">NIE</label>


        <input class="form-control"  ng-pattern="/^S[E-I]+201[7-9]+[0-9][0-9][0-9][0-9]$/" type="text" name="nie" id="nie" ng-model="student.nie" placeholder="SE20140001"  required>
        <span ng-show="myForm.nie.$error.required" class="help-inline">Required</span>

    </div>

    <div class="form-group" ng-class="{error: myForm.name.$invalid}">
        <label class="control-label" for="name">Nom</label>


        <input class="form-control" type="text" name="name" id="name" ng-model="student.name" placeholder="Nom"  required>
        <span ng-show="myForm.name.$error.required" class="help-inline">Required</span>

    </div>

    <div class="form-group" ng-class="{error: myForm.username.$invalid}">
        <label class="control-label" for="username">Prénom</label>


        <input class="form-control" type="text" name="username" id="username" ng-model="student.username" placeholder="Prénom" required>
        <span ng-show="myForm.username.$error.required" class="help-inline">Required</span>

    </div>

    <div class="form-group">
        <label class="control-label" for="address">Adresse</label>

            <textarea class="form-control" name="address" id="address"
                      ng-model="student.address"></textarea>

    </div>
    <button ng-click="save()" ng-disabled="isClean() || myForm.$invalid" class="btn btn-primary"><i
            class="icon-ok icon-white"></i> Enregistrer
    </button>
    <a href="<?php echo base_url('#/'); ?>" class="btn btn-link">Annuler</a>
    <button ng-click="destroy()" ng-show="student.id" class="btn btn-danger pull-right"><i
            class="icon-trash icon-white"></i> Supprimer
    </button>

</form>