# MCD

    ## TABLES

        ### ```PRESTATAIRE```
         **Worker**
        id
        numero_siren
        nom_entreprise
        numero_tva
        nom_gerant
        adresse_electronique
        email
        tel
        mdp


        ### ```Categorie de Prestation```
         **BenefitCategory**
        id 
        nom
        file_url
        description

        **
            les prestastation
            plomberie-electriité-peinture-menage-chauffage-menuserie-serruerie petit bricolage-borne electrique
        **

        ### ```Service d'une Prestation```
        **ServiceOfBenefitCategory**
        id
        nom
        prix
        id_type_prestatation
        text_daccroche
        file_url
        publisher_id




        ### ```Demande de Prestastion```
        **ServiceRequest**
        id
        client_id
        service_id
        adresse
        code_postal_et_ville
        lieu_prestation
        duree_location
        detail
        date_heure_prestation
        duree
        prix_par_heure
        montant_total
        statut
        (en attent , en cours , finaliser)

        ### ```Propostion De Prestation```
        **ServiceProposal**
        id 
        idprestataire
        prix_prestation
        id_demande
        statut

        ### ```Client```
        **Customer**
        id
        nom
        prenom
        email
        tel
        adresse_facturation
        mdp
