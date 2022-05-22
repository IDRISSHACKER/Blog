<div class="w80 mt5">
    <form action="#" method="POST" class="formUpload" enctype="multipart/form-data">
        <div class="form-title">Ecrire un article</div>
        <div class="card">
            <p class="form-control">
                <label for="miniature">Miniature de l'article</label>
                <input type="file" id="miniature" name="miniature" accept=".png, .jpg, .jpeg">
            </p>
            <p class="form-control">
                <label for="title">Titre de l'article</label>
                <input type="text" id="title" name="titre">
            </p>
            <p class="form-control">
                <label for="content">Contenu de l'article</label>
                <textarea id="content" rows="5" class="textArea" name="content"></textarea>
            </p>
            <p>
                <button type="submit" class="btn btn-primary" name="upload">Creer l'article</button>
            </p>
        </div>
    </form>
</div>