<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

	<title>Edit text</title>
</head>
<body style="align-content: center;">
  <div style="max-width: 100%; width: 500px; margin: auto; margin-top: 100px; border: solid 1px; padding: 20px; border-radius: 10px;">
      <form >
        <div class="form-group">
          <label for="project_name">Project Name</label>
          <input type="text" class="form-control" name="project_name" placeholder="Project Name" required>
           <small style="font-size: 12px" id="texthelp" class="form-text text-muted">Place Project Name here.</small>
        </div>

        <div class="form-group">
          <label for="project_code">Project Code</label>
          <input type="text" class="form-control" name="project_code" placeholder="Project Code" required>
           <small style="font-size: 12px" id="texthelp" class="form-text text-muted">Place Project Code here.</small>
        </div>

        <div class="form-group">
          <label for="project_text">Text</label>
          <textarea rows="10" type="text" class="form-control" name="project_text" aria-describedby="emailHelp" placeholder="New text" required></textarea>
          <small style="font-size: 12px;" id="texthelp" class="form-text text-muted">Place new text here.</small>
        </div>
        
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
  </div>

</body>
</html>