CREATE TABLE `historique` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
CREATE TABLE `inside` (
  `id` int(11) NOT NULL,
  `list_id` int(11) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `fait` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `date` date DEFAULT NULL,
  `priorite` int(11) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `list`
--


ALTER TABLE `historique`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `inside`
--
ALTER TABLE `inside`
  ADD PRIMARY KEY (`id`),
  ADD KEY `list_id` (`list_id`);

--
-- Index pour la table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `inside`
--
ALTER TABLE `inside`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT pour la table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `inside`
--
ALTER TABLE `inside`
  ADD CONSTRAINT `inside_ibfk_1` FOREIGN KEY (`list_id`) REFERENCES `list` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
