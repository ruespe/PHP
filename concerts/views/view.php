<?php
class View
{
    private $template;

    public function __construct()
    {
        $this->template = file_get_contents(__DIR__ . '/templates/concerts.html');
    }

    public function render($concerts, $title = "Tots els Concerts")
    {
        $html = $this->template;
        $html = str_replace('{{TITLE}}', $title, $html);
        $html = str_replace('{{MESSAGE}}', '', $html);

        $concertsHtml = $this->generateTable($concerts);
        $html = str_replace('{{CONCERTS}}', $concertsHtml, $html);

        return $html;
    }

    private function generateTable($concerts)
    {
        if (empty($concerts)) {
            return '<p>No hi ha concerts.</p>';
        }

        $html = '<table>';
        $html .= '<tr><th>ID</th><th>Grup</th><th>Ciutat</th><th>Sala</th><th>Data</th><th>Hora</th></tr>';

        foreach ($concerts as $concert) {
            $html .= '<tr>';
            $html .= '<td>' . $concert['id_concert'] . '</td>';
            $html .= '<td>' . $concert['grup'] . '</td>';
            $html .= '<td>' . $concert['ciutat'] . '</td>';
            $html .= '<td>' . $concert['sala'] . '</td>';
            $html .= '<td>' . $concert['data'] . '</td>';
            $html .= '<td>' . $concert['hora'] . '</td>';
            $html .= '</tr>';
        }

        $html .= '</table>';
        return $html;
    }
}
