
<div id="popup" class="popup">
    <div class="popup-content">
        <span id="closePopup">&times;</span>
        <h2>Adicionar Novo Artigo</h2>
        <form id="reviewForm" action="add_review.php" method="POST" enctype="multipart/form-data">
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" required>

            <label for="genre">Gênero:</label>
            <input type="text" id="genre" name="genre" required>

            <label for="reviewDate">Data da Review:</label>
            <input type="date" id="reviewDate" name="reviewDate" required>

            <label for="stars">Estrelas:</label>
            <input type="number" id="stars" name="stars" min="1" max="5" required>

            <label for="coverImage">Imagem de Capa:</label>
            <input type="file" id="coverImage" name="coverImage" accept="image/*" required>

            <button type="submit">Salvar</button>
        </form>
    </div>
</div>