<?php
// коментарите са на английски, за да не излиза така
// Array of links with custom IDs
$links = array(
    "znam" => "https://znamkakvoiam.shop/",
    "facebook" => "https://www.facebook.com/realicakad",
    "instagram" => "https://instagram.com/icakad",
    "yoga" => "https://www.instagram.com/yogaflow_with_rumi/",
    "rumi" => "https://www.instagram.com/angelovaru/",
);

// Get the ID from the URL
$id = isset($_GET['id']) ? $_GET['id'] : '';

// Choose a link based on the ID
if (isset($links[$id])) {
    // Redirect to the chosen link
    header("Location: " . $links[$id]);
    exit();
} else {
    // Display a list of links
    echo "<ul style='width: 250px; margin: 0 auto;'>";
    foreach ($links as $key => $link) {
        echo "<li><a href=\"/url/$key\">$key</a></li>";
    }
    echo "</ul>";
}
?>
