<?php

namespace GoVoyageBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class usersType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('role')->add('nom')->add('email')->add('mdp')->add('numtel')->add('adresse')->add('image')->add('etoile')->add('nbChambre')->add('nbChambreReserve')->add('prenom')->add('cin')->add('datenaissence')->add('note')->add('nbrNote')->add('nbrVoiture')->add('nbrVoyageOrganise');
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'GoVoyageBundle\Entity\Users'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'govoyagebundle_users';
    }


}
