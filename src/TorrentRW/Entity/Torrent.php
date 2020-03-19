<?php


namespace TorrentRW\Entity;

/**
 * Class Torrent
 * @package TorrentRW\Entity
 */
class Torrent
{
    protected $name;

    protected $filename;

    protected $peaceLength;

    protected $size;

    protected $comment;

    protected $info;

    protected $files;

    protected $httpSeeds;

    protected $isPrivate = false;

    protected $announce;

    public function __construct()
    {
    }
}