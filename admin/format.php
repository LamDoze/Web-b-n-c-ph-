<?php
/**
 * Format Class
 */
class Format {
    // Format date
    public function formatDate($date) {
        return date('F j, Y, g:i a', strtotime($date));
    }

    // Shorten text
    public function textShorten($text, $limit = 400) {
        $text = $text . " ";
        $text = substr($text, 0, $limit);
        $text = substr($text, 0, strrpos($text, ' '));
        $text = $text . "....";
        return $text;
    }

    // Validate data
    public function validation($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // Set and format title
    public function title() {
        $path = $_SERVER['SCRIPT_FILENAME'];
        $title = basename($path, '.php');
        $title = str_replace('_', ' ', $title);
        
        if ($title == 'index') {
            $title = 'home';
        } elseif ($title == 'contact') {
            $title = 'contact';
        }

        return ucfirst($title);
    }
}
?>