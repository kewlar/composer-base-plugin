<?php

namespace Kewlar\Composer;

use Composer\Composer;
use Composer\EventDispatcher\EventSubscriberInterface;
use Composer\Installer\InstallerEvent;
use Composer\Installer\InstallerEvents;
use Composer\Installer\PackageEvent;
use Composer\Installer\PackageEvents;
use Composer\IO\IOInterface;
use Composer\Plugin\CommandEvent;
use Composer\Plugin\PluginEvents;
use Composer\Plugin\PluginInterface;
use Composer\Plugin\PreFileDownloadEvent;
use Composer\Script\Event;
use Composer\Script\ScriptEvents;

/**
 * Class BasePlugin
 * @package Kewlar\Composer
 */
class BasePlugin implements PluginInterface, EventSubscriberInterface
{
    /** @type Composer */
    protected $composer;
    /** @type IOInterface */
    protected $io;

    /**
     * @inheritdoc
     */
    public function activate(Composer $composer, IOInterface $io)
    {
        $this->composer = $composer;
        $this->io = $io;
        $this->io->write(__CLASS__ . '::'. __METHOD__ . "()");
    }

    /**
     * @inheritdoc
     */
    public static function getSubscribedEvents()
    {
        return [
            PluginEvents::COMMAND => 'onCommand',
            PluginEvents::PRE_FILE_DOWNLOAD => 'onPreFileDownload',

            ScriptEvents::PRE_UPDATE_CMD => 'onPreUpdateCmd',
            ScriptEvents::POST_UPDATE_CMD => 'onPostUpdateCmd',

            InstallerEvents::PRE_DEPENDENCIES_SOLVING => 'onPreDependenciesSolving',
            InstallerEvents::POST_DEPENDENCIES_SOLVING => 'onPostDependenciesSolving',

            PackageEvents::PRE_PACKAGE_UPDATE => 'onPrePackageUpdate',
            PackageEvents::POST_PACKAGE_UPDATE => 'onPostPackageUpdate',
            PackageEvents::PRE_PACKAGE_INSTALL => 'onPrePackageInstall',
            PackageEvents::POST_PACKAGE_INSTALL => 'onPostPackageInstall',
        ];
    }

    public function onCommand(CommandEvent $event)
    {
        $this->io->write(__CLASS__ . '::'. __METHOD__ . "()");
    }

    public function onPreFileDownload(PreFileDownloadEvent $event)
    {
        $this->io->write(__CLASS__ . '::'. __METHOD__ . "()");
    }

    public function onPreUpdateCmd(Event $event)
    {
        $this->io->write(__CLASS__ . '::'. __METHOD__ . "()");
    }

    public function onPostUpdateCmd(Event $event)
    {
        $this->io->write(__CLASS__ . '::'. __METHOD__ . "()");
    }

    public function onPrePackageUpdate(PackageEvent $event)
    {
        $this->io->write(__CLASS__ . '::'. __METHOD__ . "()");
    }

    public function onPostPackageUpdate(PackageEvent $event)
    {
        $this->io->write(__CLASS__ . '::'. __METHOD__ . "()");
    }

    public function onPrePackageInstall(PackageEvent $event)
    {
        $this->io->write(__CLASS__ . '::'. __METHOD__ . "()");
    }

    public function onPostPackageInstall(PackageEvent $event)
    {
        $this->io->write(__CLASS__ . '::'. __METHOD__ . "()");
    }

    public function onPreDependenciesSolving(InstallerEvent $event)
    {
        $this->io->write(__CLASS__ . '::'. __METHOD__ . "()");
    }

    public function onPostDependenciesSolving(InstallerEvent $event)
    {
        $this->io->write(__CLASS__ . '::'. __METHOD__ . "()");
    }
}
