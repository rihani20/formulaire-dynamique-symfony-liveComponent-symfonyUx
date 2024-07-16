<?php

namespace App\Form;

use App\Entity\Drink;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfonycasts\DynamicForms\DependentField;
use Symfonycasts\DynamicForms\DynamicFormBuilder;

class DrinkType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        //chnager le buider , use le dynamic builder 
        //use addDependent 

        $builder = new DynamicFormBuilder($builder);
        $builder
            ->add('teaOrCoffee', ChoiceType::class, [
                'choices' => [
                    'Tea' => 'tea',
                    'Coffee' => 'coffee'
                ],
                'expanded' => false,
                'multiple' => false,
                'autocomplete' => true
            ])
            ->addDependent('teaType', 'teaOrCoffee', function(DependentField $field, ?string $teaOrCoffe) {
                if ($teaOrCoffe === "tea") {
                    $field->add( ChoiceType::class, [
                        'choices' => [
                            'Grren' => 'green',
                            'Red' => 'red'
                        ],
                        'expanded' => false,
                        'multiple' => false,
                        'autocomplete' => true
                    ]);
                }

            } )

            ->addDependent('coffeeType', 'teaOrCoffee', function(DependentField $field, ?string $teaOrCoffe) {
                if ($teaOrCoffe === "coffee") {
                    $field->add( ChoiceType::class, [
                        'choices' => [
                            'Express' => 'express',
                            'Americano' => 'americano',
                            'Latte' => 'latte',
                        ],
                        'expanded' => false,
                        'multiple' => false,
                        'autocomplete' => true
                    ]);
                }

            } )
        
            ->add('sugar', ChoiceType::class, [
                'choices' => [
                    'No Sugar' => false,
                    'Sugar' =>true,
                ],
                'expanded' => false,
                'multiple' => false,
                'autocomplete' => true
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Drink::class,
        ]);
    }
}
