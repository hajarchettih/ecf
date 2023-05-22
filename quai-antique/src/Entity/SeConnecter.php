namespace App\Entity;

use App\Repository\SeConnecterRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Validator\Constraints as Assert;

use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface; // Ajoutez cette ligne

#[ORM\Entity(repositoryClass: SeConnecterRepository::class)]
class SeConnecter
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    #Assert\NotBlank(message="Veuillez saisir une adresse e-mail.")
    #Assert\Email(message="Veuillez saisir une adresse e-mail valide.")
    private ?string $email = null;

    #[ORM\Column(length: 8)]
    #Assert\NotBlank(message="Veuillez saisir un mot de passe.")
    #Assert\Length(min=8,minMessage="Votre mot de passe doit contenir obligatoirement 8 caractères avec une lettre en majuscule et un symbole -_$#@*."
    private ?string $mot_de_passe = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->mot_de_passe;
    }

    public function setMotDePasse(string $mot_de_passe, UserPasswordEncoderInterface $passwordEncoder): self
    {
        $this->mot_de_passe = $passwordEncoder->encodePassword($this, $mot_de_passe);


        return $this;
    }
}
public function getmdp_oublie(): ?string
    {
        return $this->mdp_oublie;
    }

    public function setNom(string $mdp_oublie): self
    {
        $this->mdp_oublie = $mdp_oublie;

        return $this;
    }
}
public function getcree_un_compte(): ?string
    {
        return $this->cree_un_compte;
    }

    public function setNom(string $cree_un_compte): self
    {
        $this->cree_un_compte = $cree_un_compte;

        return $this;
    }
}
