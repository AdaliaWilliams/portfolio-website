<?php
include 'top.php';
?>

<main>
    <p>sql.php</p>
    <p>all sql commands and such will be found here: select, insert, create </p>

    <pre> <!---The table used when a user puts in a new clothing item --->
         CREATE TABLE tblCloset (
            pmkClothingId int(11) AUTO_INCREMENT PRIMARY KEY,
            fldClothingType tinyint(1),
            fldClothingName varchar(100),
            fldColor varchar(50)

        )
    </pre>
    <!---All clothing items and children of the closet table--->
    <p> The Full Body Table</p>
    <pre>
        CREATE TABLE tblFullBody (
            pmkFullBodyId int(11) PRIMARY KEY,
            fldName varchar(500),
            fldColor varchar(800),
            fldImageName varchar(800),
            fldFavorite tinyint(1),
            fldClean tinyint(1)
        )
    </pre>

    <p> The Dress Table</p>
    <pre>
        CREATE TABLE tblDresses (
            pmkDressId int(11) PRIMARY KEY,
            fldName varchar(500),
            fldColor varchar(800),
            fldImageName varchar(800),
            fldFavorite tinyint(1),
            fldClean tinyint(1)
        )
    </pre>

    <p> The Shirt Table</p>
    <pre>
        CREATE TABLE tblShirts (
            pmkShirtId int(11) PRIMARY KEY,
            fldName varchar(500),
            fldColor varchar(800),
            fldImageName varchar(800),
            fldFavorite tinyint(1),
            fldClean tinyint(1)
        )
    </pre>

    <p> The Sweaters Table</p>
    <pre>
        CREATE TABLE tblSweaters (
            pmkSweatersId int(11) PRIMARY KEY,
            fldName varchar(500),
            fldColor varchar(800),
            fldImageName varchar(800),
            fldFavorite tinyint(1),
            fldClean tinyint(1)
        )
    </pre>

    <p> The Jackets Table</p>
    <pre>
        CREATE TABLE tblJackets (
            pmkJacketsId int(11) PRIMARY KEY,
            fldName varchar(500),
            fldColor varchar(800),
            fldImageName varchar(800),
            fldFavorite tinyint(1),
            fldClean tinyint(1)
        )

    </pre>

    <p> The Pants Table</p>
    <pre>
        CREATE TABLE tblPants (
            pmkPantsId int(11) PRIMARY KEY,
            fldName varchar(500),
            fldColor varchar(800),
            fldImageName varchar(800),
            fldFavorite tinyint(1),
            fldClean tinyint(1)
        )

    </pre>

    <p> The Skirts Table</p>
    <pre>
        CREATE TABLE tblSkirts (
            pmkSkirtsId int(11) PRIMARY KEY,
            fldName varchar(500),
            fldColor varchar(800),
            fldImageName varchar(800),
            fldFavorite tinyint(1),
            fldClean tinyint(1)
        )

    </pre>

    <p> The Activewear Table</p>
    <pre>
        CREATE TABLE tblActiveWear (
            pmkActiveWearId int(11) PRIMARY KEY,
            fldName varchar(500),
            fldColor varchar(800),
            fldImageName varchar(800),
            fldFavorite tinyint(1),
            fldClean tinyint(1)
        )

    </pre>

    <pre>
        SELECT pmkStudentId, fldFirstName, fldLastName, fldTitle,
        fldYear, fldShows, fldShowDescription, fldMainImage,
        fldLink
        FROM tblStudentMembers
        ORDER BY pmkStudentId
    </pre>
    <pre>

    </pre>
    <pre>

    </pre>


    <pre>

    </pre>
    <pre>

    </pre>

    <pre>
    CREATE TABLE tblRoles (
            fpkRole varchar(500) PRIMARY KEY,
            )
    </pre>

    <pre>
    CREATE TABLE tblMemberEpisode (
            pmkMemberEpisodeId int(11) AUTO_INCREMENT PRIMARY KEY,
            fmkMemberId int(11),
            fpkEpisodeId int(11),
            fpkRole varchar(500),
            fldEnteredBy varchar(20)
            )
    </pre>


</main>
<?php
include 'footer.php';
?>
