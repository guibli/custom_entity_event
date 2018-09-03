<?php

namespace Drupal\custom_entity_event\Event;

use Symfony\Component\EventDispatcher\Event;
use Drupal\Core\Entity\EntityInterface;

/**
 * Extend Event class to create event on Entity insert
 */
class EntityEvent extends Event{

    const INSERT = 'custom_entity_event.entity.insert';
    const UPDATE = 'custom_entity_event.entity.update';
    const DELETE = 'custom_entity_event.entity.delete';

    /**
     * Entity
     * @var \Drupal\Core\Entity\EntityInterface
     */
    protected $entity;

    /**
     * Entity
     * @var \Drupal\Core\Entity\EntityEventType
     */
    protected $eventType;

    /**
     * construct
     *@param string $event_type
     * The event type.
     *  @param \Drupal\Core\Entity\EntityInterface $entity
    */

    public function __construct($event_type, EntityInterface $entity){
        $this->eventType = $event_type;
        $this->entity = $entity;
    }

    /**
     * getter
     * return \Drupal\Core\Entity\EntityInterface
     */
    public function getEntity(){
        return $this->entity;
    }

    /**
     * getter
     * return \Drupal\Core\Entity\EntityEventType
     */
    public function getEventType(){
        return $this->eventType;
    }

}
