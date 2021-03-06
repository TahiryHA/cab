<div class="col-md-12 nopadding">
    <div class="page-header">
        <div class="pull-right">
            <p>Nombre de masculin : {{ man() }}</p>
            <p>Nombre de féminin : {{ woman() }}</p>
        </div>
        <h1>{{ title }} </h1>

        <a class="brand" href="<?= base_url() ?>#/student/stat">Caculer la répartition entre les femmes et les hommes
        </a>

    </div>


</div>


<div class="form-group">
    <select ng-model="order" ng-init="order='name'">
        <option value="" disabled selected>Trier par</option>
        <option value="name">Nom</option>
        <option value="description">Prénom</option>
    </select>
    <div class="pull-right">
        <p>Total des élèves : {{ students.length }}</p>
    </div>
</div>

<table class="table table-hover table-responsive">
    <thead>
        <tr>
            <th class="col-md-4" style="width:5%">NIE</th>
            <th class="col-md-4" style="width:10%">Nom</th>
            <th class="col-md-4" style="width:10%">Prénom</th>
            <th class="col-md-4">Adresse</th>
            <th class="col-md-4 nobold">
                <div class="col-md-8 nopadding"><input type="text" ng-model="search" class="form-control" placeholder="Rechercher"></div>
                <div class="col-md-4 nopadding"><a class="btn btn-success btn-small pull-right" href="<?= base_url() ?>#/student/new"><i class="icon-plus icon-white"></i> Ajout
                        étudiant</a>
                </div>

            </th>
        </tr>
    </thead>
    <tbody>
        <tr ng-repeat="student in students | filter:search | orderBy:order">
            <td>{{student.nie}}</td>
            <td>{{student.name}}</td>
            <td><i>{{student.username}}</i></td>
            <td>{{ student.address }}</td>
            <td>
                <div class="pull-right">
                    <a class="btn btn-primary btn-mini" href="<?= base_url() ?>#/student/edit/{{student.id}}"><i class="fas fa-edit"></i>Modifier</a>
                    <button ng-click="destroy(student)" class="btn btn-danger btn-mini"><i class="icon-trash icon-white"></i> Supprimer
                    </button>
                </div>
            </td>
        </tr>
    </tbody>
</table>