<?php
    require_once("functions/db.php");
    $conn = ketnoidb();
    $sql = "select * from categories";
    $rs = $conn->query($sql);
    $cats = [];
    while($row = $rs->fetch_assoc()){
        $cats[] = $row;
    }
?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container">
    <a class="navbar-brand" href="/">T2409M</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Trang chủ</a>
        </li>
        <?php foreach($cats as $item):?>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" 
                href="/category.php?id=<?php echo $item["id"]; ?>"><?php echo $item["name"];?>
                </a>
            </li>
        <?php endforeach;?>    
      </ul>
      <form action="/search.php" method="GET" class="d-flex" role="search">
        <input name="q" class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>