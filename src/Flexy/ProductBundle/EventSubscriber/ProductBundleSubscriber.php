<?php
# src/EventSubscriber/EasyAdminSubscriber.php
namespace App\Flexy\ProductBundle\EventSubscriber;

use App\Entity\User;
use App\Flexy\ProductBundle\Entity\Product;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ProductBundleSubscriber implements EventSubscriberInterface
{
 

    private $security;
    private $passwordEncoder;

    public function __construct(Security $security,UserPasswordEncoderInterface $passwordEncoder)
{
        $this->security = $security;
        $this->passwordEncoder = $passwordEncoder;
    }

    public static function getSubscribedEvents()
    {
        return [
            BeforeEntityPersistedEvent::class => ['beforePersist'],
            BeforeEntityUpdatedEvent::class => ['beforeUpdate'],
        ];
    }

    public function beforePersist(BeforeEntityPersistedEvent $event)
    {
        $entity = $event->getEntityInstance();

        if ($entity instanceof Product) {
            foreach($entity->getCategoryProducts() as $singleCatergory){
                $singleCatergory->addProduct($entity);
            }
        }
                

    }


    public function beforeUpdate(BeforeEntityUpdatedEvent $event)
    {
        $entity = $event->getEntityInstance();

                if ($entity instanceof Product) {

                    foreach($entity->getCategoryProducts() as $singleCatergory){
                        $singleCatergory->addProduct($entity);
                    }
                }
                

    }
}