<!DOCTYPE html>
<html>
<head>
    <title>API Documentatie - Blog Posts</title>
    <link rel="stylesheet" href="https://unpkg.com/swagger-ui-dist/swagger-ui.css" />
</head>
<body>
<h1>Blog Posts API</h1>
<div id="swagger-ui"></div>
<script src="https://unpkg.com/swagger-ui-dist/swagger-ui-bundle.js"></script>
<script>
    const ui = SwaggerUIBundle({
        url: "/docs/posts-api.yml",
        dom_id: '#swagger-ui',
    });
</script>
</body>
</html>
