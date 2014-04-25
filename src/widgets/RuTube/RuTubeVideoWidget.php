<?php
namespace Catharsis\Web;

/**
 * Renders embedded RuTube video on web page.
 */
class RuTubeVideoWidget extends HtmlWidget
{
    private $_height;
    private $_id;
    private $_width;

    /**
     * Height of video control.
     * This attribute is required.
     * @param string $height Height of video.
     * @return \Catharsis\Web\RuTubeVideoWidget Reference to the current widget.
     */
    public function height($height)
    {
        $this->_height = (string) $height;
        return $this;
    }

    /**
     * Identifier of video.
     * This attribute is required.
     * @param string $id Identifier of video.
     * @return \Catharsis\Web\RuTubeVideoWidget Reference to the current widget.
     */
    public function id($id)
    {
        $this->_id = (string) $id;
        return $this;
    }

    /**
     * Width of video control.
     * This attribute is required.
     * @param string $width Width of video.
     * @return \Catharsis\Web\RuTubeVideoWidget Reference to the current widget.
     */
    public function width($width)
    {
        $this->_width = (string) $width;
        return $this;
    }

    /**
     * Returns HTML markup text of widget.
     */
    public function __toString()
    {
        if (empty($this->_id) || empty($this->_height) || empty($this->_width)) {
            return "";
        }

        return self::htmlTag("iframe", array(
            "allowfullscreen" => true,
            "frameborder" => 0,
            "height" => $this->_height,
            "mozallowfullscreen" => true,
            "scrolling" => "no",
            "src" => "http://rutube.ru/embed/{$this->_id}",
            "webkitallowfullscreen" => true,
            "width" => $this->_width
        ));
    }
}

?>
