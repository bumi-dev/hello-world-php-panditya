<?php

class HelloWorld {

  /**
   * @var string
   */
  const TEXT = 'Hello World!';

  /**
   * @var string
   */
  public $text;

  /**
   * @return void
   */
  public function __construct()
  {
      $this->text = self::TEXT;
  }

  /**
   * @return string
   */
  public function getText()
  {
      return $this->text;
  }

  /**
   * @var string $text
   * @return void
   */
  public function setText($text)
  {
      $this->text = $text;
  }

  /**
   * @var string $text
   * @return void
   */
  public function appendText($text)
  {
      $this->text = $this->text . $text;
  }

  /**
   * @var string $text
   * @return void
   */
  public function prependText($text)
  {
      $this->text = $text . $this->text;
  }

  /**
   * @return void
   */
  public function printText() {
      echo $this->text;
  }

}

?>
