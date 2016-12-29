<div class="modal fade" id="myModalRename">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="#">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title">Renommage d'une Base de donnée</h4>
                </div>
                <div class="modal-body">
                    <p>Insérer le nouveau nom de la Base de donnée <strong id="databaseRename">{name}</strong> :</p>
                    <div class="form-group">
                        <input type="text" style="width:100%;" name="nouveauNom">
                    </div>
                </div>
                <div>
                    <input type="hidden" name="bddname" value="" id="databaseRenameInput">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <button type="submit" class="btn btn-primary" data-dismiss="modal">Renommer</button>
                </div>
            </form>
        </div>
    </div>
</div>