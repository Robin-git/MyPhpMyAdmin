<div class="modal fade" id="myModalRenameBdd">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="index.php?bdd.rename" method="post" id="formDatabaseRename">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Renommage d'une Base de donnée</h4>
                </div>
                <div class="modal-body">
                    <p>Insérer le nouveau nom de la Base de donnée <strong id="databaseRename">{name}</strong> :</p>
                    <div class="form-group">
                        <input type="text" style="width:100%;" name="newDbName" id="databaseRenameNewInput">
                    </div>
                </div>
                <div>
                    <input type="hidden" name="currentDbName" value="" id="CurrentDatabaseRenameInput">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" title="pas terminé" disabled class="btn btn-primary">Renommer</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script type="text/javascript">

    function renameBDD(database) {
        console.log(database);
        document.getElementById("databaseRename").innerHTML = database;
        document.getElementById("CurrentDatabaseRenameInput").value = database;


    }
</script>
