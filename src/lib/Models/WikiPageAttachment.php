<?php

namespace Takuya\BacklogApiClient\Models;

use Takuya\BacklogApiClient\Models\Attachment;

class WikiPageAttachment extends Attachment {
  // これ、要らないかも。
  public int     $id;
  public ?int $wikiId;
  public string $name;
  public int $size;
  public function getContent():string {
    return $this->api->getWikiPageAttachment($this->parent->id, $this->id);
  }
}