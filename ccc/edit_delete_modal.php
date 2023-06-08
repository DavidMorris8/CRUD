
<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Edit Membe</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="edit.php?id=<?php echo $row['id']; ?>">
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">nome</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="nome" value="<?php echo $row['nome']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">produto</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="produto" value="<?php echo $row['produto']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">funcionario</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="funcionario" value="<?php echo $row['funcionario']; ?>">
                </div>
            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label">venda</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="venda" value="<?php echo $row['venda']; ?>">
                </div>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="edit" class="btn btn-primary"> Update</a>
        </form>
      </div>
    </div>
  </div>
</div>
 
<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Delete Membe</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <p class="text-center">Are you sure you want to Delete</p>
            <h2 class="text-center"><?php echo $row['nome'].' '.$row['produto']; ?></h2>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"> Yes</a>
      </div>
    </div>
  </div>
</div>